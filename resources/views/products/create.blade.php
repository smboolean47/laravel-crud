@extends('layouts.base')

@section('pageContent')
<h1>Crea un nuovo prodotto</h1>

<form>
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome del prodotto">
    </div>
    <div class="form-group">
        <label for="type">Tipo Pasta</label>
        <select class="form-control form-control-md" id="type" name="type">
            <option value="lunga">Lunga</option>
            <option value="corta">Corta</option>
            <option value="cortissima">Cortissima</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cooking_time">Tempo di cottura</label>
        <input type="number" class="form-control" id="cooking_time" name="cooking_time" placeholder="Inserisci il tempo di cottura">
    </div>
    <div class="form-group">
        <label for="weight">Peso</label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="Inserisci il peso del prodotto">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="8" placeholder="Inserisci la descrizione del prodotto"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'url dell'immagine">
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
  </form>
@endsection