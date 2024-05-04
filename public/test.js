

$('#RWS').on('change', () => {
    let RWS = $('#RWS').val()
    $.ajax({
        url: '/SRW',
        type: POST,
        data:{
            notelp: RWS
        },
        succes: (res)=>{
            console.log(res)
        },
        error: (err)=>{
            console.log(err)
        }
    })
})