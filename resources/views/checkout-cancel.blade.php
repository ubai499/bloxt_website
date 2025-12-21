{{-- resources/views/checkout-cancel.blade.php --}}
@extends('layouts.app')

@section('title', 'Payment Cancelled')

@section('content')
<style>
    .cancel-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }
    
    .cancel-card {
        max-width: 600px;
        width: 100%;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        padding: 40px;
        text-align: center;
    }
    
    .cancel-icon {
        width: 80px;
        height: 80px;
        background: #ef4444;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        animation: shake 0.5s ease-out;
    }
    
    .cancel-icon i {
        font-size: 40px;
        color: white;
    }
    
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-10px); }
        75% { transform: translateX(10px); }
    }
    
    .cancel-card h1 {
        color: #1f2937;
        font-size: 32px;
        margin-bottom: 15px;
    }
    
    .cancel-card p {
        color: #6b7280;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 30px;
    }
    
    .info-box {
        background: #fef3c7;
        border-left: 4px solid #f59e0b;
        padding: 15px;
        border-radius: 8px;
        margin: 30px 0;
        text-align: left;
    }
    
    .info-box p {
        margin: 0;
        color: #92400e;
        font-size: 14px;
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
        color: #6b7280;
        border: 2px solid #d1d5db;
    }
    
    .btn-secondary:hover {
        background: #f9fafb;
        border-color: #9ca3af;
        transform: translateY(-2px);
    }
</style>

<div class="cancel-container">
    <div class="cancel-card">
        <div class="cancel-icon">
            <i class="fa-solid fa-times"></i>
        </div>
        
        <h1>Payment Cancelled</h1>
        <p>Your payment was cancelled. No charges have been made to your account.</p>
        
        <div class="info-box">
            <p><strong>Note:</strong> If you experienced any issues during checkout or have questions about our products, please don't hesitate to contact our support team.</p>
        </div>
        
        <div class="action-buttons">
            <a href="{{ route('home') }}" class="btn-primary">
                <i class="fa-solid fa-home"></i>
                Back to Home
            </a>
            <a href="javascript:history.back()" class="btn-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                Try Again
            </a>
        </div>
        
        <p style="margin-top: 30px; font-size: 14px; color: #6b7280;">
            Need help? Contact us at <a href="mailto:support@yourcompany.com" style="color: #3b82f6; text-decoration: none;">support@yourcompany.com</a>
        </p>
    </div>
</div>
@endsection