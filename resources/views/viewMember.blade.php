<h1>Members List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Actions</td>
    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['m_id']}}</td>
        <td>{{$member['m_name']}}</td>
        <td>{{$member['m_email']}}</td>
        <td>{{$member['m_address']}}</td>
        <td><a href={{"deleteMember/".$member['m_id']}}>Delete</a></td>
    </tr>
    @endforeach
</table>
<div>
    {{$members->links()}}
</div>
<style>
    .w-5 {
        display: none;
    }
</style>