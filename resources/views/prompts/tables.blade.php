Given the below input question and list of potential tables, output a comma separated list of the table names that maybe necessary to answer this question.
Question: {{ $question }}
Table Names: @foreach($tables as $table){{ $table }},@endforeach

Relevant Table Names:
