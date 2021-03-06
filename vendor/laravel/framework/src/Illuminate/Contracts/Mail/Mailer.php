<?php

namespace Illuminate\Contracts\Mail;

interface Mailer
{
    /**
     * Send a new message when only a raw text part.
     *
     * 仅在原始文本部分发送一条新消息
     *
     * @param  string  $text
     * @param  \Closure|string  $callback
     * @return int
     */
    public function raw($text, $callback);

    /**
     * Send a new message using a view.
     *
     * 使用视图发送一条新消息
     *
     * @param  string|array  $view
     * @param  array  $data
     * @param  \Closure|string  $callback
     * @return void
     */
    public function send($view, array $data = [], $callback = null);

    /**
     * Get the array of failed recipients.
     *
     * 获取失败接收者的数组
     *
     * @return array
     */
    public function failures();
}
