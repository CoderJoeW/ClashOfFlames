.class public Lcom/supercell/clashofclans/TimeAlarm;
.super Landroid/content/BroadcastReceiver;


# direct methods
.method public constructor <init>()V
    .locals 0

    invoke-direct {p0}, Landroid/content/BroadcastReceiver;-><init>()V

    return-void
.end method


# virtual methods
.method public onReceive(Landroid/content/Context;Landroid/content/Intent;)V
    .locals 1

    const-class v0, Lcom/supercell/clashofclans/GameApp;

    invoke-static {p1, p2, v0}, Lcom/supercell/titan/dj;->a(Landroid/content/Context;Landroid/content/Intent;Ljava/lang/Class;)V

    return-void
.end method
