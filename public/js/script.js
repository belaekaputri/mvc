$(function(){
$('.tampilModalUbah').on('click',function(){
$('#formModalLabel').html('UBAH LIST');
$('.modal-footer button[type=submit]').html('EDIT');
$('.modal-body form').attr('action','http://localhost/mvc/public/mylist/ubah');

const id=$(this).data('id');
$.ajax({
  url:'http://localhost/mvc/public/mylist/getubah',
	data:{id: id},
	method:'post',
	dataType:'json',
	success:function (data){
		$('#jadwal').val(data.jadwal);
			$('#status').val(data.status);
				$('#id').val(data.id);
	}







});















});



});
