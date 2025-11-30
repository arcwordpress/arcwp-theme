<?php get_header('showcase'); ?>


<div class="container">

    <h1 class="main-heading">Master the Block Bindings API</h1>

    <p>Block bindings in Gutenberg are a way to connect any block attribute directly to dynamic data sources (like post meta, site options, or custom fields) using a simple bindings property — so the content updates automatically without writing custom blocks.</p>

    <h2 class="heading-2">Dynamic Data Support</h2>
    <p>Block bindings can be thought of as part of the larger topic of dynamic data support within the editor.</p>

    <h2>Evolution of Block Bindings in WPv6.9</h2>
    <p>There has been an increase in the number of core block types that utilize block bindings from 4 to 7.</p>

    <pre><code><?php echo esc_html('<!-- wp:paragraph {
    "metadata":{
        "bindings":{
        "content":{
            "source":"core/post-data",
            "args":{
            "field":"date"
            }
        }
        }
    }
    } -->'); ?></code></pre>

    <h2>Defining Block Bindings in Markup</h2>
    <p>Remember the path metadata.bindings. All bindings fit under the umbrella namespace "metadata". The bindings are an object keyed by the available attribute.</p>
    <p>As of 6.9 block types "declare the attributes that can be bound". We can refer to these as "BOUNDABLE ATTRIBUTES".</p>
    <p>In summary our goal with the markup for a single block instance, is to bind the boundable attributes to available dynamic data. We'll explore how dynamic data is sourced next.</p>


    <h2>Practice Binding Core Blocks</h2>
    <p>Think for a moment, how would you bind a heading block instance?</p>
    <p>First you would need to remember the block name, in this case it's core/heading. All core block types are namespaced under core/. Next we recall that that we need metadata.bindings.[bindable-attribute-key].</p>

    <pre><code><?php echo esc_html('<!-- wp:heading {
    "metadata":{
        "bindings":{
        "content":{
            "source":"core/post-data",
            "args":{
                "field":"date"
            }
        }
        }
    }
    } -->'); ?></code></pre>

    <h2>Data Sources</h2>
    <p>There are 3 data sources for block bindings baked into WordPress core (as of v6.9). Developers can add additional custom data sources using the <code>register_block_bindings_source()</code> function. We'll explore custom sources later. First familiarize yourself deeply with the core data sources already available.</p>
    <ul>
        <li>
            <h3>core/post-meta</h3>
            <p>Provides registered post meta data. Supported by ACF and other field system vendors, with the caveat that meta fields must be registered.</p>
        </li>
        <li>
            <h3>core/post-data</h3>
            <p>Added in WPv6.9. Provides standard post field data such as post_status, modified date and more.</p>
        </li>
        <li>
            <h3>core/pattern-overrides</h3>
            <p>Enables support for pattern overrides.</p>
        </li>
    </ul>

    <blockquote class="key-points">
        Block types have attributes (block-type.attributes[]) as in paragraph block type (core/paragraph) has attributes.content (content). Block types (as of v6.9) can declare the attributes that are bindable. These bindable attributes are "handled" within the block, often switching a block instance from static rendering to dynamic rendering.
    </blockquote>

    <h2>Supported Attributes Filtering</h2>
    <p>Two tightly related filters are available as of v6.9 to discover and edit the "supported attributes" which we have typically referred to in this training as "bindable attributes".</p>
    <pre>
        <code>
            add_filter( 'block_bindings_supported_attributes', function( $supported_block_attributes, $block_type ) {
                // $supported_block_attributes is either empty array or array of bindable attribute keys.
                // $block_type is the block type name (e.g. core/paragraph).
            });
        </code>
    </pre>
    <p>Note that all block types call this filter even if they have no bindable attributes.</p>
    <p>These filters only run in Gutenberg.</p>

    <h3>Functional API</h3>
    <p>get_all_registered_block_bindings_sources() returns array of all registered (public) data sources. Despite the name "get_all" this function does not return core data sources, it include "all from public" sources. Core data sources do not use the public API.</p>
    <pre>
        <code>
            Array
            (
                [zero/post-field] => WP_Block_Bindings_Source Object
                    (
                        [name] => zero/post-field
                        [label] => Post Field
                        [get_value_callback:WP_Block_Bindings_Source:private] => Closure Object
                            (
                                [parameter] => Array
                                    (
                                        [$args] => 
                                        [$block_instance] => 
                                    )

                            )

                        [uses_context] => Array
                            (
                                [0] => postId
                                [1] => postType
                            )

                    )

            )
        </code>
    </pre>
    <p>Example above shows the output of get_all_registered_block_bindings_sources() on a site with 1 custom block binding source registered.</p>

    <p>https://developer.wordpress.org/reference/functions/get_block_bindings_source/</p>
    <p>register_block_bindings_source( string $source_name, array $source_properties )</p>
    <p>https://developer.wordpress.org/reference/classes/wp_block_bindings_registry/</p>

    <h2>Resource References</h2>
    <a href="https://developer.wordpress.org/news/2024/06/an-introduction-to-overrides-in-synced-patterns/">https://developer.wordpress.org/news/2024/06/an-introduction-to-overrides-in-synced-patterns/</a>
    
    <h2>THE CONTENT ------</h2>
    <?php the_content(); ?>

</div>



<?php get_footer('showcase'); ?>

<style>

.main-heading {
    font-size: 4rem;
    font-weight: 900;
    font-family: "lexend exa", sans-serif;
    line-height: 1;
}

.heading-2 {
    font-size: 2rem;
    font-weight: 800;
    font-family: "lexend exa", sans-serif;
}

.container {
    max-width: 640px;
}

@media (min-width: 1280px) {
    .container {
        margin-left: auto;
        margin-right: auto;
    }
}

pre {
    overflow-x: auto;
    white-space: pre;
    display: block;
    max-width: 100%;
    margin: 0;
    padding: 0;
}
code {
    white-space: pre;
    margin: 0;
    padding: 0;
}

.key-points {
    margin: 2rem 0;
}

</style>