<div style="background: #f7fafc; padding: 40px 0; min-height: 100vh; font-family: Arial, sans-serif;">
    <div style="max-width: 480px; margin: 40px auto; background: #fff; border-radius: 10px; box-shadow: 0 4px 24px rgba(0,0,0,0.08); padding: 32px 24px;">
        <div style="text-align: center; margin-bottom: 24px;">
            <img src="{{ asset('images/logo.png') }}" alt="ST Marys Logo" style="height: 64px; margin-bottom: 8px;">
            <h2 style="font-size: 22px; color: #4f46e5; margin: 0; font-weight: bold;">Reset Your Password</h2>
        </div>
        <p style="font-size: 16px; color: #333; margin-bottom: 24px; text-align: center;">
            We received a request to reset your password for your ST Marys account.<br>
            Click the button below to choose a new password.
        </p>
        <div style="text-align: center; margin-bottom: 24px;">
            <a href="{{ route('reset-password') }}?token={{ $token }}&email={{ $email }}" style="display: inline-block; background: #6366f1; color: #fff; padding: 12px 32px; border-radius: 6px; text-decoration: none; font-size: 16px; font-weight: 600; letter-spacing: 0.5px;">Reset Password</a>
        </div>
        <p style="font-size: 14px; color: #6b7280; text-align: center; margin-bottom: 0;">
            If you did not request a password reset, please ignore this email.<br>
            This link will expire after a short period for your security.
        </p>
    </div>
    <div style="text-align: center; color: #9ca3af; font-size: 12px; margin-top: 32px;">
        &copy; {{ date('Y') }} ST Marys. All rights reserved.
    </div>
</div>
