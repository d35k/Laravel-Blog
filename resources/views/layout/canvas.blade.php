<!-- canvas -->
<canvas id="canvas-banner" style="background: #393D49;"></canvas>
<script type="text/javascript">
    var canvas = document.getElementById('canvas-banner');
    canvas.width = window.document.body.clientWidth - 10;
    if (screen.width >= 992) {
        canvas.height = window.innerHeight * 1 / 3;
    } else {
        canvas.height = window.innerHeight * 2 / 7;
    }
</script>