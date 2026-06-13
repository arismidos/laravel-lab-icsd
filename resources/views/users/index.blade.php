<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Lab - Διαχείριση Χρηστών</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f3f4f6; margin: 0; padding: 40px; display: flex; justify-content: center; }
        .card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); width: 100%; max-width: 500px; }
        h2 { color: #1f2937; margin-top: 0; border-bottom: 2px solid #e5e7eb; padding-bottom: 10px; }
        label { display: block; margin-top: 15px; color: #4b5563; font-weight: 600; font-size: 14px; }
        input { width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #d1d5db; border-radius: 6px; box-sizing: border-box; }
        button { width: 100%; background-color: #3b82f6; color: white; padding: 12px; border: none; border-radius: 6px; margin-top: 20px; font-weight: bold; cursor: pointer; transition: background 0.2s; }
        button:hover { background-color: #2563eb; }
        ul { list-style: none; padding: 0; margin-top: 20px; }
        li { background: #f9fafb; padding: 12px; border: 1px solid #e5e7eb; border-radius: 6px; margin-bottom: 8px; color: #374151; }
        .alert-success { background-color: #def7ec; color: #03543f; padding: 12px; border-radius: 6px; font-weight: 500; margin-bottom: 15px; }
        .alert-danger { background-color: #fde8e8; color: #9b1c1c; padding: 10px; border-radius: 6px; font-size: 14px; margin-top: 5px; }
    </style>
</head>
<body>

<div class="card">
    <h2>Προσθήκη Χρήστη</h2>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert-danger">
            @foreach ($errors->all() as $error)
                <div>• {{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form action="{{ url('/users') }}" method="POST">
        @csrf {{-- Προστασία CSRF --}}
        
        <label for="name">Ονοματεπώνυμο</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="email">Ηλεκτρονικό Ταχυδρομείο (Email)</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <button type="submit">Υποβολή Δεδομένων</button>
    </form>

    <h2 style="margin-top: 40px;">Εγγεγραμμένοι Χρήστες</h2>
    <ul>
        @forelse($users as $user)
            <li><strong>{{ $user->name }}</strong> — {{ $user->email }}</li>
        @empty
            <li style="color: #9ca3af; font-style: italic; text-align: center;">Δεν υπάρχουν καταχωρημένοι χρήστες.</li>
        @endforelse
    </ul>
</div>

</body>
</html>
