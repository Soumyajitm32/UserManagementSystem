<html>
<title>User Registraion</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <form action="{{ url("/userRegistrationLogic") }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{isset($admin)?$admin->id:0}}" />
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{isset($admin)?$admin['name']:old('name')}}">
            <small class="form-text text-red" style="color:red">@error("name"){{$message}}@enderror</small>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Age</label>
            <input type="text" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{isset($admin)?$admin['age']:old('age')}}">
            <small class="form-text text-red" style="color:red">@error("age"){{$message}}@enderror</small>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-select" value="{{isset($admin)?$admin['gender']:old('gender')}}">
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>

            </select>
            <small class="form-text text-red" style="color:red">@error("gender"){{$message}}@enderror</small>

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{isset($admin)?$admin['email']:old('email')}}">
            <small class="form-text text-red" style="color:red">@error("email"){{$message}}@enderror</small>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number"
                maxlength="10" value="{{isset($admin)?$admin['contact']:old('contact')}}">
                <small class="form-text text-red" style="color:red">@error("contact"){{$message}}@enderror</small>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" value="{{isset($admin)?$admin['address']:old('address')}}"></textarea>
            <small class="form-text text-red" style="color:red">@error("address"){{$message}}@enderror</small>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pin Code</label>
            <input type="number" name="pin" id="pin" class="form-control" placeholder="Enter Pincode" value="{{isset($admin)?$admin['pin']:old('pin')}}">
            <small class="form-text text-red" style="color:red">@error("pin"){{$message}}@enderror</small>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post Office</label>
            <input type="text" name="po" id="po" class="form-control" placeholder="Enter Post Office" value="{{isset($admin)?$admin['po']:old('po')}}">
            <small class="form-text text-red" style="color:red">@error("po"){{$message}}@enderror</small>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">District</label>
            <input type="text" name="district" id="district" class="form-control" placeholder="Enter District" value="{{isset($admin)?$admin['district']:old('district')}}">
            <small class="form-text text-red" style="color:red">@error("district"){{$message}}@enderror</small>

        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <select id="state" name="state" class="form-select" value="{{isset($admin)?$admin['state']:old('state')}}">
                <option value="">Select State</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Ladakh">Ladakh</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
            <small class="form-text text-red" style="color:red">@error("state"){{$message}}@enderror</small>


        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Country</label>
            <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country" value="{{isset($admin)?$admin['country']:old('country')}}">
            <small class="form-text text-red" style="color:red">@error("country"){{$message}}@enderror</small>

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" value="{{isset($admin)?$admin['dob']:old('dob')}}">
            <small class="form-text text-red" style="color:red">@error("dob"){{$message}}@enderror</small>
        </div>


        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control"
                placeholder="Enter Password">
                <small class="form-text text-red" style="color:red">@error("password"){{$message}}@enderror</small>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>




</html>
