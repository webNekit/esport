<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class SubmitBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'form.customer_name' => 'required|string|max:255',
            'form.customer_phone' => 'required|string|max:20',
            'form.start_time' => 'required|date_format:H:i',
            'form.end_time' => 'required|date_format:H:i|after:form.start_time',
        ];
    }
}
