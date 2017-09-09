.class Lcom/supercell/titan/db;
.super Landroid/content/BroadcastReceiver;


# instance fields
.field final synthetic a:Lcom/supercell/titan/da;


# direct methods
.method constructor <init>(Lcom/supercell/titan/da;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/db;->a:Lcom/supercell/titan/da;

    invoke-direct {p0}, Landroid/content/BroadcastReceiver;-><init>()V

    return-void
.end method


# virtual methods
.method public onReceive(Landroid/content/Context;Landroid/content/Intent;)V
    .locals 1

    iget-object v0, p0, Lcom/supercell/titan/db;->a:Lcom/supercell/titan/da;

    invoke-static {v0}, Lcom/supercell/titan/da;->a(Lcom/supercell/titan/da;)V

    return-void
.end method
