<!-- flatpickr（日付選択機能のライブラリ）スクリプト -->
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<!-- 日本語化のための追加スクリプト -->
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
<script>
// 第一引数に flatpickr で日付選択を行わせたい要素を指定し、第二引数にオプションを渡す。
    flatpickr(document.getElementById('due_date'), {
      locale: 'ja',
      dateFormat: "Y/m/d",
      minDate: new Date()
    });
 
</script>