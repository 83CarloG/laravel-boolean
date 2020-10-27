<h1>Inserisci un nuovo studewnte</h1>

<form action="{{route("students.store")}}" method="POST">

    @csrf

    @method("POST")

    <input type="text" name="name" placeholder="nome">
    <input type="text" name="lastname" placeholder="cognome">
    <label for="">Maschio</label>
    <input type="radio" name="gender" value="M" id="maschio">
    <label for="">Femmina</label>
    <input type="radio" name="gender" value="F" id="femmina">
    <input type="date" name="date_of_birth" id="">
    <input type="submit" value="Crea Studente">
</form>
