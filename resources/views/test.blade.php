<table border="1" style="width: 100%">
    <thead>
        <th>ID</th>
        <th>User</th>
        <th>Grade</th>
    </thead>
    <tbody>
      @forelse ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->grade->name }}</td>
       </tr>
      @empty
      <tr>
        <td colspan="2">no data</td>
       </tr>
      @endforelse

    </tbody>
</table>