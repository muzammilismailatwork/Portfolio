@component('mail::message')
    <div>
        <h3>Contact Details</h3>
        <p>Dear Admin,<br/>Latest contact request is found. Please check it.</p>
    </div>
    <div>
        Person details:
        @component('mail::table')
            |             |          |
            | ------------- |:-------------:|
            | Name      | {{$data["name"]}}      |
            | Email      | {{$data["email"]}}      |
            | Number      | {{$data["number"]}}      |
            | Subject      | {{$data["subject"]}}      |
            | Message      | {{$data["message"]}}      |
        @endcomponent
        <br/>
        Contact at: {{\Carbon\Carbon::now()->format('l jS \of F Y h:i:s A')}}
    </div>
@endcomponent
