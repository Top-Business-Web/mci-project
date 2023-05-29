window.onload = function (){
    let btnDownload = document.getElementById('download');
    btnDownload.addEventListener('click',() =>{
        let filePDF = this.document.getElementById('download-pdf');
        // filePDF.print();
        html2pdf().from(filePDF).save();
    })
}