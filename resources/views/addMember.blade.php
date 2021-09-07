<h1>Add Members</h1>
<form action="addMembers" method="POST">
    @csrf
    <input type="text" name="m_name" placeholder="Name" /><br><br>
    <input type="email" name="m_email" placeholder="Email" /><br><br>
    <input type="text" name="m_address" placeholder="Address" /><br><br>
    <button type="submit">Add Member</button>
</form>