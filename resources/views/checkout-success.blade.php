{{-- resources/views/checkout-success.blade.php --}}
@extends('layouts.app')

@section('title', 'Payment Successful')

@section('content')
<style>
    .success-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }
    
    .success-card {
        max-width: 600px;
        width: 100%;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        padding: 40px;
        text-align: center;
    }
    
    .success-icon {
        width: 80px;
        height: 80px;
        background: #10b981;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        animation: scaleIn 0.5s ease-out;
    }
    
    .success-icon i {
        font-size: 40px;
        color: white;
    }
    
    @keyframes scaleIn {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
    
    .success-card h1 {
        color: #1f2937;
        font-size: 32px;
        margin-bottom: 15px;
    }
    
    .success-card p {
        color: #6b7280;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 30px;
    }
    
    .order-details {
        background: #f9fafb;
        border-radius: 8px;
        padding: 20px;
        margin: 30px 0;
        text-align: left;
    }
    
    .order-details h3 {
        color: #1f2937;
        font-size: 18px;
        margin-bottom: 15px;
    }
    
    .detail-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #e5e7eb;
    }
    
    .detail-row:last-child {
        border-bottom: none;
    }
    
    .detail-label {
        color: #6b7280;
        font-weight: 500;
    }
    
    .detail-value {
        color: #1f2937;
        font-weight: 600;
    }
    
    .action-buttons {
        display: flex;
        gap: 15px;
        margin-top: 30px;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .btn-primary, .btn-secondary {
        padding: 12px 30px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    
    .btn-primary {
        background: #3b82f6;
        color: white;
    }
    
    .btn-primary:hover {
        background: #2563eb;
        transform: translateY(-2px);
    }
    
    .btn-secondary {
        background: white;
        color: #3b82f6;
        border: 2px solid #3b82f6;
    }
    
    .btn-secondary:hover {
        background: #eff6ff;
        transform: translateY(-2px);
    }
</style>

<div class="success-container">
    <div class="success-card">
        <div class="success-icon">
            ✔
        </div>
        
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase. Your order has been confirmed and we've sent a confirmation email to your registered email address.</p>
        
        @if(isset($quote))
        <div class="order-details">
            <h3>Order Details</h3>
            <div class="detail-row">
                <span class="detail-label">Quote ID:</span>
                <span class="detail-value">#{{ $quote->id }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Customer Name:</span>
                <span class="detail-value">{{ $quote->full_name }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Email:</span>
                <span class="detail-value">{{ $quote->email }}</span>
            </div>
            @if($quote->product)
            <div class="detail-row">
                <span class="detail-label">Product:</span>
                <span class="detail-value">{{ $quote->product->title }}</span>
            </div>
            @endif
            <div class="detail-row">
                <span class="detail-label">Amount Paid:</span>
                <span class="detail-value">£{{ number_format($quote->product_price, 2) }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Payment Status:</span>
                <span class="detail-value" style="color: #10b981;">{{ ucfirst($quote->payment_status) }}</span>
            </div>
        </div>
        @endif
        
        <div class="action-buttons">
            <a href="{{url('/')}}" class="btn-primary">
                Back to Home
            </a>
            <a href="#" onclick="window.print(); return false;" class="btn-secondary">
                Print Receipt
            </a>
        </div>
        
        <p style="margin-top: 30px; font-size: 14px;">
            Our team will contact you within 24 hours to schedule the installation.
        </p>
    </div>
</div>
@endsection