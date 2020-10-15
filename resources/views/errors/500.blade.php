<div class="content">
    <div class="title">Something went wrong.</div>
 
    @if(app()->bound('sentry') && app('sentry')->getLastEventId())
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raven.js/3.3.0/raven.min.js"></script>
    <div class="subtitle">Error ID: {{ app('sentry')->getLastEventId() }}</div>
    <script>
      Raven.showReportDialog(
        {
          eventId:'{{ app('sentry')->getLastEventId() }}',
          dsn: 'https://fd24d6bc1c8a4a8a96c1b7ceb001c744@o461330.ingest.sentry.io/5462988'
        }
      );
      // Sentry.init({ dsn: 'https://fd24d6bc1c8a4a8a96c1b7ceb001c744@o461330.ingest.sentry.io/5462988' });
      // Sentry.showReportDialog({ eventId: '{{ app('sentry')->getLastEventId() }}' });
    </script>
    @endif
  </div>