<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Submission</title>
</head>
<body>
    <div class="container">
        <h1>Submission Successful</h1>
    </div>
    <div class="form-container">
        <ul>
            @foreach ($data as $key => $value)
                @unless ($key === '_token')
                    @if ($key === 'art')
                        <li>{{ $key }}: <img src="{{ asset('storage/' . $value) }}" alt="Art Picture">
                        </li>
                    @else
                        <li>{{ $key }}: {{ $value }}</li>
                    @endif
                @endunless
            @endforeach
        </ul>
    </div>
</body>
</html>
