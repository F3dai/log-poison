## LFI website

Intentionally vulnerable website for LFI and log poisoning / polluting.

Allowing unsanatized user input can lead to LFI.

<pre>
&lt;?php

$file = $_GET['file'];

if(isset($file))
{
    include(&quot;$file&quot;);
}
</pre>

This repo is for demonstration.
