
<section class="referral-form">
    <div class="form-container">
        <h2>Refer A Direct Support Professional</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
    </div>
    @elseif($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
    @endif
        <form action="{{route('career.store')}}" method="POST" class="referal-form">
            @csrf
            <label for="name">Your Name</label>
            <input type="text" name="name" required>
            <label for="email">Your Email</label>
            <input type="email" name="email" required>
            <label for="referel">Your Referee Name</label>
            <input type="text" name="referel" required>
            <label for="referel-email">Your Referee Email Or Phone</label>
            <input type="text" name="referel_email" required>
            <input type="submit" value="Submit">

        </form>

    </div>

</section>