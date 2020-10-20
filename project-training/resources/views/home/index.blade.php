
<table style="width:100%">
  <tr>
    <th>Name</th>
    <th colspan="2">Telephone</th>
  </tr>
  <tr>
      @foreach($posts as $post)
          <td>
              <h2>{{$post['title']}}</h2>
              <h5>{{$post['description']}}</h5>
              <br>
              <h3 href="{{asset('/'.$post['id']}}">READ MORE</h3>
          </td>
      @endforeach
  </tr>
</table>
