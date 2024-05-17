@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Exemple de Table Bootstrap</h2>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Note 1 </th>
          <th>Note 2 </th>
          <th> </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>john@example.com</td>
          <td>123-456-7890</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane Smith</td>
          <td>jane@example.com</td>
          <td>987-654-3210</td>
        </tr>
        <!-- Ajoutez plus de lignes au besoin -->
      </tbody>
    </table>
  </div>

  <!-- Inclure le script Bootstrap JS (en option, pour les fonctionnalités avancées) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
