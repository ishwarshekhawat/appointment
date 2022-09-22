<div class="flash-message">
  @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{!! Session::get('alert-' . $msg) !!}  
          <?php if (isset($allbarcode[0])){ ?>
          <a href="<?php echo BmcGetUrl($allbarcode[0].'.pdf','qr-code'); ?>" target="_blank">Open Qr Code</a>
          <?php } ?>
        <a href="javascript:" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      </p>
    @endif
  @endforeach
</div> <!-- end .flash-message -->

