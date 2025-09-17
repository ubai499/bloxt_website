{{-- resources/views/emails/new_item.blade.php --}}
<!DOCTYPE html>
<html>
<body>
    <h2>New item posted: {{ $product->title ?? 'Untitled' }}</h2>
    @isset($item->description)
        <p>{{ $item->description }}</p>
    @endisset

    @if(method_exists($product, 'getUrl') && $product->getUrl())
        <p><a href="{{ $product->getUrl() }}">View item</a></p>
    @endif

    <hr>
    <p style="font-size:12px;color:#666">
        You are receiving this because you subscribed on our site.
        <a href="{{ route('unsubscribe', $subscriber->unsubscribe_token) }}">Unsubscribe</a>
    </p>
</body>
</html>
