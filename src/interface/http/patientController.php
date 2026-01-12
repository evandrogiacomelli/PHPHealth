<?php

function handlePatient(string $api, string $method): void
{
    if ($api === 'patient' && $method === 'GET') {
        var_dump("get hit");
    }
    if ($api === 'patient' && $method === 'POST') {
        var_dump("post hit");
    }
    if ($api === 'patient' && $method === 'PUT') {
        var_dump("put hit");
    }
    if ($api === 'patient' && $method === 'DELETE') {
        var_dump("delete hit");
    }
}
