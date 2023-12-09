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
        <form method="post" action="{{ $url }}/signup">
            @csrf
            <x-input type='text' name='name' label='Name' />
            <x-input type='number' name='mobile' label='Mobile' />
            <x-input type='text' name='email' label='Email Id' />

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
