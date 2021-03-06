<div class="bs-docs-section">
<div class="page-header">
    <h1 id="grid">Grid system</h1>
</div>
<p class="lead">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12
    columns as the device or viewport size increases. It includes <a href="#grid-example-basic">predefined classes</a>
    for easy layout options, as well as powerful <a href="#grid-less">mixins for generating more semantic layouts</a>.
</p>

<h3 id="grid-media-queries">Media queries</h3>

<p>We use the following media queries to create the key breakpoints in our grid system.</p>

<div class="highlight"><pre><code class="css"><span class="c">/* Extra small devices (phones, up to 480px) */</span>
            <span class="c">/* No media query since this is the default in Bootstrap */</span>

            <span class="c">/* Small devices (tablets, 768px and up) */</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-sm</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>

            <span class="c">/* Medium devices (desktops, 992px and up) */</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-md</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>

            <span class="c">/* Large devices (large desktops, 1200px and up) */</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-lg</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>
        </code></pre>
</div>
<p>We occasionally expand on these media queries to include a <code>max-width</code> to limit CSS to a narrower set of
    devices.</p>

<div class="highlight"><pre><code class="css"><span class="k">@media</span> <span class="o">(</span><span class="nt">max-width</span><span
                class="o">:</span> <span class="k">@screen-phone-max</span><span class="o">)</span> <span
                class="p">{</span> <span class="o">...</span> <span class="p">}</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-sm</span><span class="o">)</span> <span class="nt">and</span>
            <span class="o">(</span><span class="nt">max-width</span><span class="o">:</span> <span class="k">@screen-sm-max</span><span
                class="o">)</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-md</span><span class="o">)</span> <span class="nt">and</span>
            <span class="o">(</span><span class="nt">max-width</span><span class="o">:</span> <span class="k">@screen-md-max</span><span
                class="o">)</span> <span class="p">{</span> <span class="o">...</span> <span class="p">}</span>
            <span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
                class="o">:</span> <span class="k">@screen-lg</span><span class="o">)</span> <span class="p">{</span>
            <span class="o">...</span> <span class="p">}</span>
        </code></pre>
</div>

<h3 id="grid-options">Grid options</h3>

<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th></th>
            <th>
                Extra small devices
                <small>Phones (&lt;768px)</small>
            </th>
            <th>
                Small devices
                <small>Tablets (≥768px)</small>
            </th>
            <th>
                Medium devices
                <small>Desktops (≥992px)</small>
            </th>
            <th>
                Large devices
                <small>Desktops (≥1200px)</small>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>Grid behavior</th>
            <td>Horizontal at all times</td>
            <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
        </tr>
        <tr>
            <th>Max container width</th>
            <td>None (auto)</td>
            <td>750px</td>
            <td>970px</td>
            <td>1170px</td>
        </tr>
        <tr>
            <th>Class prefix</th>
            <td><code>.col-xs-</code></td>
            <td><code>.col-sm-</code></td>
            <td><code>.col-md-</code></td>
            <td><code>.col-lg-</code></td>
        </tr>
        <tr>
            <th># of columns</th>
            <td colspan="4">12</td>
        </tr>
        <tr>
            <th>Max column width</th>
            <td class="text-muted">Auto</td>
            <td>60px</td>
            <td>78px</td>
            <td>95px</td>
        </tr>
        <tr>
            <th>Gutter width</th>
            <td colspan="4">30px (15px on each side of a column)</td>
        </tr>
        <tr>
            <th>Nestable</th>
            <td colspan="4">Yes</td>
        </tr>
        <tr>
            <th>Offsets</th>
            <td colspan="1" class="text-muted">N/A</td>
            <td colspan="3">Yes</td>
        </tr>
        <tr>
            <th>Column ordering</th>
            <td class="text-muted">N/A</td>
            <td colspan="3">Yes</td>
        </tr>
        </tbody>
    </table>
</div>

<h3 id="grid-example-basic">Example: Stacked-to-horizontal</h3>

<p>Using a single set of <code>.col-md-*</code> grid classes, you can create a basic grid system that starts out stacked
    on mobile devices and tablet devices (the extra small to small range) before becoming horizontal on desktop (medium)
    devices.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
        <div class="col-md-1">.col-md-1</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-8">.col-md-8</div>
        <div class="col-md-4">.col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4">.col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-6">.col-md-6</div>
        <div class="col-md-6">.col-md-6</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-1"</span><span
                class="nt">&gt;</span>.col-md-1<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-8"</span><span
                class="nt">&gt;</span>.col-md-8<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>.col-md-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-example-mixed">Example: Mobile and desktop</h3>

<p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by
    adding <code>.col-xs-*</code> <code>.col-md-*</code> to your columns. See the example below for a better idea of how
    it all works.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-xs-12 col-md-8">.col-xs-12 col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-xs-6">.col-xs-6</div>
        <div class="col-xs-6">.col-xs-6</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-12 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 col-md-8<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span
                class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span
                class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-xs-6"</span><span
                class="nt">&gt;</span>.col-xs-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-example-mixed-complete">Example: Mobile, tablet, desktops</h3>

<p>Build on the previous example by creating even more dynamic and powerful layouts with tablet <code>.col-sm-*</code>
    classes.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
        <div class="col-xs-6 col-sm-6 col-md-4">.col-xs-6 .col-sm-6 .col-md-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
        <div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
        <!-- Optional: clear the XS cols if their content doesn't match in height -->
        <div class="clearfix visible-xs"></div>
        <div class="col-xs-6 col-sm-4 col-md-4">.col-xs-6 .col-sm-4 .col-md-4</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-12 col-sm-6 col-md-8"</span><span class="nt">&gt;</span>.col-xs-12 .col-sm-6 .col-md-8<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-6 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-6
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-4 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-4 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="c">&lt;!-- Optional: clear the XS cols if their content doesn't match in height --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"clearfix visible-xs"</span><span class="nt">&gt;&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-4 col-md-4"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-4
            .col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-responsive-resets">Responsive column resets</h3>

<p>With the four tiers of grids available you're bound to run into issues where, at certain breakpoints, your columns
    don't clear quite right as one is taller than the other. To fix that, use a combination of a <code>.clearfix</code>
    and our <a href="../css#responsive-utilities">responsive utility classes</a>.</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- Add the extra clearfix for only the required viewport --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"clearfix visible-xs"</span><span class="nt">&gt;&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-xs-6 col-sm-3"</span><span class="nt">&gt;</span>.col-xs-6 .col-sm-3<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>
<p>In addition to column clearing at responsive breakpoints, you may need to <strong>reset offsets, pushes, or
        pulls</strong>. Those resets are available for medium and large grid tiers only, since they start only at the
    (second) small grid tier.</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-sm-5 col-md-6"</span><span class="nt">&gt;</span>.col-sm-5 .col-md-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0"</span><span
                class="nt">&gt;</span>.col-sm-5 .col-sm-offset-2 .col-md-6 .col-md-offset-0<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-sm-6 col-md-5 col-lg-6"</span><span class="nt">&gt;</span>.col-sm-6 .col-md-5
            .col-lg-6<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0"</span><span
                class="nt">&gt;</span>.col-sm-6 .col-md-5 .col-md-offset-2 .col-lg-6 .col-lg-offset-0<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>


<h3 id="grid-offsetting">Offsetting columns</h3>

<p>Move columns to the right using <code>.col-md-offset-*</code> classes. These classes increase the left margin of a
    column by <code>*</code> columns. For example, <code>.col-md-offset-4</code> moves <code>.col-md-4</code> over four
    columns.</p>

<div class="bs-docs-grid">
    <div class="row show-grid">
        <div class="col-md-4">.col-md-4</div>
        <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
        <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
    </div>
    <div class="row show-grid">
        <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-4"</span><span
                class="nt">&gt;</span>.col-md-4<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-4 col-md-offset-4"</span><span class="nt">&gt;</span>.col-md-4 .col-md-offset-4<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-3 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-3 .col-md-offset-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-6 col-md-offset-3"</span><span class="nt">&gt;</span>.col-md-6 .col-md-offset-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>


<h3 id="grid-nesting">Nesting columns</h3>

<p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-md-*</code> columns
    within an existing <code>.col-md-*</code> column. Nested rows should include a set of columns that add up to 12.</p>

<div class="row show-grid">
    <div class="col-md-9">
        Level 1: .col-md-9
        <div class="row show-grid">
            <div class="col-md-6">
                Level 2: .col-md-6
            </div>
            <div class="col-md-6">
                Level 2: .col-md-6
            </div>
        </div>
    </div>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-9"</span><span
                class="nt">&gt;</span>
            Level 1: .col-md-9
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>
            Level 2: .col-md-6
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col-md-6"</span><span
                class="nt">&gt;</span>
            Level 2: .col-md-6
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-column-ordering">Column ordering</h3>

<p>Easily change the order of our built-in grid columns with <code>.col-md-push-*</code> and <code>.col-md-pull-*</code>
    modifier classes.</p>

<div class="row show-grid">
    <div class="col-md-9 col-md-push-3">.col-md-9 .col-md-push-3</div>
    <div class="col-md-3 col-md-pull-9">.col-md-3 .col-md-pull-9</div>
</div>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"row"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-9 col-md-push-3"</span><span class="nt">&gt;</span>.col-md-9 .col-md-push-3<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"col-md-3 col-md-pull-9"</span><span class="nt">&gt;</span>.col-md-3 .col-md-pull-9<span
                class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

<h3 id="grid-less">LESS mixins and variables</h3>

<p>In addition to <a href="#grid-example-basic">prebuilt grid classes</a> for fast layouts, Bootstrap includes LESS
    variables and mixins for quickly generating your own simple, semantic layouts.</p>

<h4>Variables</h4>

<p>Variables determine the number of columns, the gutter width, and the media query point at which to begin floating
    columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins
    listed below.</p>

<div class="highlight"><pre><code class="css"><span class="k">@grid-columns</span><span class="o">:</span> <span
                class="nt">12</span><span class="p">;</span>
            <span class="k">@grid-gutter-width</span><span class="o">:</span> <span class="nt">30px</span><span
                class="p">;</span>
            <span class="k">@grid-float-breakpoint</span><span class="o">:</span> <span class="nt">768px</span><span
                class="p">;</span>
        </code></pre>
</div>

<h4>Mixins</h4>

<p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>

<div class="highlight"><pre><code class="css"><span class="o">//</span> <span class="nt">Creates</span> <span
    class="nt">a</span> <span class="nt">wrapper</span> <span class="nt">for</span> <span
    class="nt">a</span> <span class="nt">series</span> <span class="nt">of</span> <span
    class="nt">columns</span>
<span class="nc">.make-row</span><span class="o">(</span><span class="k">@gutter</span><span
    class="o">:</span> <span class="k">@grid-gutter-width</span><span class="o">)</span> <span
    class="p">{</span>
<span class="o">//</span> <span class="nt">Then</span> <span class="nt">clear</span> <span
    class="nt">the</span> <span class="nt">floated</span> <span class="nt">columns</span>
<span class="nc">.clearfix</span><span class="o">();</span>

<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="nt">margin-right</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="p">}</span>

<span class="o">//</span> <span class="nt">Negative</span> <span class="nt">margin</span> <span class="nt">nested</span>
<span class="nt">rows</span> <span class="nt">out</span> <span class="nt">to</span> <span
    class="nt">align</span> <span class="nt">the</span> <span class="nt">content</span> <span
    class="nt">of</span> <span class="nt">columns</span>
<span class="nc">.row</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="nt">margin-right</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">-2</span><span
    class="o">)</span><span class="p">;</span>
<span class="p">}</span>
<span class="p">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">extra</span>
<span class="nt">small</span> <span class="nt">columns</span>
<span class="nc">.make-xs-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@grid-float-breakpoint</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">small</span>
<span class="nt">columns</span>
<span class="nc">.make-sm-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">small</span>
<span class="nt">column</span> <span class="nt">offsets</span>
<span class="nc">.make-sm-column-offset</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-sm-column-push</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-sm-column-pull</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-small</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">right</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">medium</span>
<span class="nt">columns</span>
<span class="nc">.make-md-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">large</span>
<span class="nt">column</span> <span class="nt">offsets</span>
<span class="nc">.make-md-column-offset</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-md-column-push</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-md-column-pull</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-medium</span><span class="o">)</span> <span
    class="p">{</span>
<span class="nt">right</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">large</span>
<span class="nt">columns</span>
<span class="nc">.make-lg-column</span><span class="o">(</span><span class="k">@columns</span><span
    class="p">;</span> <span class="k">@gutter</span><span class="o">:</span> <span class="k">@grid-gutter-width</span><span
    class="o">)</span> <span class="p">{</span>
<span class="nt">position</span><span class="o">:</span> <span class="nt">relative</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Prevent</span> <span class="nt">columns</span> <span class="nt">from</span>
<span class="nt">collapsing</span> <span class="nt">when</span> <span class="nt">empty</span>
<span class="nt">min-height</span><span class="o">:</span> <span class="nt">1px</span><span
    class="o">;</span>
<span class="o">//</span> <span class="nt">Inner</span> <span class="nt">gutter</span> <span
    class="nt">via</span> <span class="nt">padding</span>
<span class="nt">padding-left</span><span class="o">:</span> <span class="o">(</span><span
    class="k">@gutter</span> <span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span
    class="p">;</span>
<span class="nt">padding-right</span><span class="o">:</span> <span class="o">(</span><span class="k">@gutter</span>
<span class="o">/</span> <span class="nt">2</span><span class="o">)</span><span class="p">;</span>

<span class="o">//</span> <span class="nt">Calculate</span> <span class="nt">width</span> <span class="nt">based</span>
<span class="nt">on</span> <span class="nt">number</span> <span class="nt">of</span> <span class="nt">columns</span>
<span class="nt">available</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">float</span><span class="o">:</span> <span class="nt">left</span><span class="o">;</span>
<span class="nt">width</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>

<span class="o">//</span> <span class="nt">Generate</span> <span class="nt">the</span> <span class="nt">large</span>
<span class="nt">column</span> <span class="nt">offsets</span>
<span class="nc">.make-lg-column-offset</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">margin-left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-lg-column-push</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">left</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
<span class="nc">.make-lg-column-pull</span><span class="o">(</span><span class="k">@columns</span><span
    class="o">)</span> <span class="p">{</span>
<span class="k">@media</span> <span class="o">(</span><span class="nt">min-width</span><span
    class="o">:</span> <span class="k">@screen-large</span><span class="o">)</span> <span class="p">{</span>
<span class="nt">right</span><span class="o">:</span> <span class="nt">percentage</span><span
    class="o">((</span><span class="k">@columns</span> <span class="o">/</span> <span class="k">@grid-columns</span><span
    class="o">))</span><span class="p">;</span>
<span class="err">}</span>
<span class="err">}</span>
</code></pre>
</div>

<h4>Example usage</h4>

<p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here's an
    example of using the default settings to create a two-column layout with a gap between.</p>

<div class="highlight"><pre><code class="css"><span class="nc">.wrapper</span> <span class="p">{</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">row</span><span
                class="p">();</span>
            <span class="p">}</span>
            <span class="nc">.content-main</span> <span class="p">{</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">lg</span><span
                class="o">-</span><span class="n">column</span><span class="p">(</span><span class="m">8</span><span
                class="p">);</span>
            <span class="p">}</span>
            <span class="nc">.content-secondary</span> <span class="p">{</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">lg</span><span
                class="o">-</span><span class="n">column</span><span class="p">(</span><span class="m">3</span><span
                class="p">);</span>
            <span class="o">.</span><span class="n">make</span><span class="o">-</span><span class="n">lg</span><span
                class="o">-</span><span class="n">column</span><span class="o">-</span><span
                class="n">offset</span><span class="p">(</span><span class="m">1</span><span class="p">);</span>
            <span class="p">}</span>
        </code></pre>
</div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"wrapper"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"content-main"</span><span
                class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"content-secondary"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>

</div>