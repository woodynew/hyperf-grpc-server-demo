<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protobuf/protos/GrpcDemo.proto

namespace GPBMetadata\Protobuf\Protos;

class GrpcDemo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
protobuf/protos/GrpcDemo.protoGrpcDemo"#
HiUser
name (	
sex (":
HiReply
message (	
user (2.GrpcDemo.HiUser27
hi1
sayHello.GrpcDemo.HiUser.GrpcDemo.HiReply" bproto3'
        , true);

        static::$is_initialized = true;
    }
}

