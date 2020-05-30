# mysql基础考点

1 mysql数据类型

    整数类型：
    
        tinyint、smallint、mediumint、int、bigint  int(11)代表字符宽度是11位
    
    实数类型：
    
        float、double、decimal
        
    字符串类型：
    
        varchar(可变长)、char（定长）超出长度会被截断
        
        blob、text慎用
        
    日期时间
    
        timestamp比datetime效率更高
        
    列属性
    
        auto_increment、default、not null、zerofill

    mysql基础操作
    
        连接和关闭
            
            mysql -u -p -h -P 库名
            
            \G \c \q \s \h \d
    
    mysql存储引擎
    
        InnoDB默认事务引擎
        
        MyISAM
    
    mysql锁机制
    
        读锁与写锁
    
    mysql事务处理、存储过程、触发器
    
        事务、多条sql语句保存在一个集合里面、
        
        触发器
        
2 mysql高性能索引

    索引、主键、唯一索引、联合索引的区别？
    
        
    
    mysql索引基础和类型
    
        mysql索引创建原则
        mysql索引注意事项
        
    1 减少服务器扫描数据量
    2 提高查询速度
    3 降低写操作速度，会额外操作索引
    
    索引类型：
    
        1 普调索引
        2 唯一索引
        3 主键索引 一个表一个 主键必唯一
        4 组合索引
        
    原则：最适合在where列后面加索引、指定索引空间、创建复合索引
    
    注意事项：
    
        1 复合索引遵循前缀原则 *
        
        2 like %
        
        3 索引需要保证数据类型一致
        
3 mysql关联查询

    1 left join
    
    
    
    
    