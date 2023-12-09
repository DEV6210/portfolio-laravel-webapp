<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: rgb(207, 202, 202)
    }
</style>

<body>
    <div style="width: 50%">
        <form method="post" action="{{ $url }}">
            <div class="card">
                <div class="card-header">{{ $title }}</div>
                <div class="card-body">
                    @csrf
                    <x-input type='text' name='name' label='Name'
                        value="{{ $customers != '' ? $customers->name : old('name') }}" />

                    <x-input type='number' name='mobile' value="{{ $customers != '' ? $customers->mobile : old('mobile') }}"
                        label='Mobile' />
                    <x-input type='text' name='email' value="{{ $customers != '' ? $customers->email : old('email') }}"
                        label='Email Id' />
                </div>
                <div class="card-footer text-muted"><button type="submit" class="btn btn-primary">Submit</button></div>
            </div>
        </form>

    </div>
</body>

</html>
