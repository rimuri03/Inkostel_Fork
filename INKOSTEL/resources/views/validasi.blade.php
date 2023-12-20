<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
</head>
<body style="display:flex; justify-content:center; align-items:center;margin-top:10%">
    <form action="/update" method="post">
    @csrf
        <input type="hidden" name="id" value="{{ $pegawai->id }}">
        <div class="mb-3 ">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name"
            value="{{ $pegawai->name }}" >
        </div>

    
</body>
</html>