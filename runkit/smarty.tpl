{datemock date='2001-01-01'}
{$smarty.now|date_format:'%Y/%m/%d'}
{if $that_day|date_format:"%Y-%m-%d" > $smarty.now|date_format:"%Y-%m-%d"}
  {$that_day}は今日より未来
{else}
  {$that_day}は今日より過去
{/if}