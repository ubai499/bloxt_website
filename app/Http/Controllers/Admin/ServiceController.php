<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function service_list()
    {
        $services = Service::all();
        return view('admin.services.service_list', compact('services'));
    }

    public function service_create()
    {
        return view('admin.services.service_create');
    }

    public function service_store(Request $request)
    {
        try {
            if ($request->hasFile('service_image')) {
                $imagePath = $request->file('service_image')->move(public_path('assets/img/service'),'service-' . time() . '.jpg');
            }
            DB::beginTransaction();
            $service = Service::create([
                'service_name' => $request->input('service_name'),
                'service_description' => $request->input('service_description'),
                'service_image' => 'assets/img/service/' . pathinfo($imagePath)['basename'],
                'faq_details' => $request->input('faq_details'),
                'seo_meta_data' => json_encode($request->input('seo_meta_data')),
            ]);
            DB::commit();
            return redirect()->route('admin.services')->with('success', 'Service created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create service: ' . $e->getMessage()
            ], 500);
        }
    }

    public function service_edit($id)
    {
        $service = Service::findOrFail($id);
        $seo_data = json_decode($service->seo_meta_data, true);
        return view('admin.services.service_edit', compact('service', 'seo_data'));
    }

    public function service_update(Request $request, $id)
    {
        try{
            $service = Service::findOrFail($id);
            $data = $request->only(['service_name', 'service_description', 'faq_details', 'seo_meta_data']);

            if ($request->hasFile('service_image')) {
                $imagePath = $request->file('service_image')->move(public_path('assets/img/service'), 'service-' . time() . '.jpg');
                $data['service_image'] = 'assets/img/service/' . pathinfo($imagePath)['basename'];
            }

            DB::beginTransaction();
            $service->update($data);
            DB::commit();

            return redirect()->route('admin.services')->with('success', 'Service updated successfully.');   
        }
        catch(\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update service: ' . $e->getMessage()
            ], 500);
        }
    }

    public function service_view($id)
    {
        $service = Service::findOrFail($id);
        $seo_data = json_decode($service->seo_meta_data, true);
        return view('admin.services.service_view', compact('service', 'seo_data'));
    }

    public function service_delete($id)
    {
        try {
            $service = Service::findOrFail($id);
            if ($service) {
                DB::beginTransaction();
                $service->delete();
                DB::commit();
            }

            return redirect()->route('admin.services')->with('success', 'Service deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete service: ' . $e->getMessage()
            ], 500);
        }
    }
}
