<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ $data['subject'] }}</title> --}}
    <style>
        .name {
            display: flex;
            align-items: center;
            margin-bottom: 2px;
        }

        .space {
            margin-right: 10px;
        }

        .conatainer {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="conatainer">
        <div class="name">
            <h4 class="space">Name:</h4>
            <span>{{ $data['name'] }}</span>
        </div>
        <div class="name">
            <h4 class="space">from:</h4>
            <span>{{ $data['email'] }}</span>
        </div>
        <div class="name">
            <h4 class="space">Subject:</h4>
            <span>{{ $data['subject'] }}</span>
        </div>

        <h4>Message:</h4>
        <p>
            {{ $data['message'] }}
        </p>
    </div>
</body>

</html>
