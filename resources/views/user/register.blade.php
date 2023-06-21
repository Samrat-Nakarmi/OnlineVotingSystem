<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register|</title>
</head>
<body>
    <div class="register-form">

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        @endif

        <form action="/register" method="post">
            @csrf
            <div class="register">
                <input type="text" name="username" placeholder="Username*" id="">
            </div>
            <div class="register">
                <input type="text" name="password" placeholder="Password*" id="">
            </div>
            <div class="register">
                <input type="text" name="first_name" placeholder="First Name*" id="">
            </div>
            <div class="register">
                <input type="text" name="last_name" placeholder="Last Name*" id="">
            </div>
            <div class="register">
                <input type="email" name="email" placeholder="Email" id="">
            </div>
            <div class="register">
                <input type="date" name="date_of_birth" id="">
            </div>
            <div class="register">
                <select name="country" id="">
                    <option value="" disabled selected>Country</option>
                    <option value="nepal">Nepal</option>
                    <option value="usa">USA</option>
                </select>
            </div>
            <div class="register">
                <select name="state" id="">
                    <option value="" disabled selected>State</option>
                    <option value="bagmati">Bagmati</option>
                    <option value="new-york">New York</option>
                </select>
            </div>
            <div class="register">
                <select name="city" id="">
                    <option value="" disabled selected>City</option>
                    <option value="kathmandu">Kathmandu</option>
                    <option value="brooklyn">Brooklyn</option>
                </select>
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>