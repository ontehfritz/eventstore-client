<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ClientMessageDtos.proto

namespace Rxnet\EventStore\Data;

/**
 * Protobuf enum <code>Rxnet.EventStore.Data.ReadEventCompleted.ReadEventResult</code>
 */
class ReadEventCompleted_ReadEventResult
{
    /**
     * <code>Success = 0;</code>
     */
    const Success = 0;
    /**
     * <code>NotFound = 1;</code>
     */
    const NotFound = 1;
    /**
     * <code>NoStream = 2;</code>
     */
    const NoStream = 2;
    /**
     * <code>StreamDeleted = 3;</code>
     */
    const StreamDeleted = 3;
    /**
     * <code>Error = 4;</code>
     */
    const Error = 4;
    /**
     * <code>AccessDenied = 5;</code>
     */
    const AccessDenied = 5;
}
