{extends file="../master.tpl"}

{block name= "css"}
<link rel="stylesheet" href="{base_url('asset/css/style2.css')}"/>
{/block}


{block name="body"}

<div class="page">



<div class="centre">

    <h1>Competence </h1>
    
    <div id="myDIV" class="header">
      <h2>My To Do List</h2>
      <input type="text" id="myInput" placeholder="Title...">
      <span onclick="newElement()" class="addBtn">Add</span>
    </div>

    <ul id="myUL">
      <li>Hit the gym</li>
      <li class="checked">Pay bills</li>
      <li>Meet George</li>
      <li>Buy eggs</li>
      <li>Read a book</li>
      <li>Organize office</li>
    </ul>

</div>



<script src="{base_url('js/index.js')}"></script>


</div>

{/block}
