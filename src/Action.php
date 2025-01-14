<?php

namespace Parse\Hook;

class Action extends Event
{
    public function fire($action, $args)
    {
        if ($this->getListeners()) {
            $this->getListeners()->where('hook', $action)->each(function ($listener) use ($action, $args) {
                $parameters = [];
                for ($i = 0; $i < $listener['arguments']; $i++) {
                    $value        = $args[$i] ?? null;
                    $parameters[] = $value;
                }
                call_user_func_array($this->getFunction($listener['callback']), $parameters);
            });
        }
    }
}
