@component('mail::message')



<b>Phone</b> {{ $checkout['phone']}}<br/>
<b>Payment_Method</b> {{ $checkout['fav_language']}}<br/>
<b>Subject</b> Order Confirmation<br/>

This is an email to confirm that it was you who ordered items from OpenMart.If not contact us to resolve the issue.

We also like to inform you that we have a 30 day return policy on which past date will not be refundable..

Thank you for shopping with us, we hope to continue having you as our beloved customer.

Have a great day!!!

@component('mail::button', ['url' => 'mailto:gmemontogram@gmail.com'])
Reply to Mementogram
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent