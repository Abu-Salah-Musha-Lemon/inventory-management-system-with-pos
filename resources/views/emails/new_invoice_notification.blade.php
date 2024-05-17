@component('mail::message')
# New Invoice Notification
Time: @php echo date("d F Y, g:i a", strtotime(now())); @endphp<br>

Customer Name: {{ $customerName }},

We are pleased to inform you that a new invoice has been created for you. 
The total amount of the invoice is <i> ${{ $totalAmount }}<i>.

Thank you for your business.<br>
© @php echo date("Y");@endphp Develop By ASMLemon<br>
Sincerely,<br>
{{ config('app.name') }}
@endcomponent