.class Lcom/supercell/titan/dc;
.super Ljava/lang/Object;

# interfaces
.implements Landroid/content/ServiceConnection;


# instance fields
.field final synthetic a:Lcom/supercell/titan/da;


# direct methods
.method constructor <init>(Lcom/supercell/titan/da;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public onServiceConnected(Landroid/content/ComponentName;Landroid/os/IBinder;)V
    .locals 3

    const/4 v2, 0x1

    iget-object v0, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    invoke-static {p2}, Lcom/android/vending/billing/IInAppBillingService$Stub;->a(Landroid/os/IBinder;)Lcom/android/vending/billing/IInAppBillingService;

    move-result-object v1

    invoke-static {v0, v1}, Lcom/supercell/titan/da;->a(Lcom/supercell/titan/da;Lcom/android/vending/billing/IInAppBillingService;)Lcom/android/vending/billing/IInAppBillingService;

    iget-object v0, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    invoke-static {v0, v2}, Lcom/supercell/titan/da;->a(Lcom/supercell/titan/da;Z)Z

    iget-object v0, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    invoke-static {v0}, Lcom/supercell/titan/da;->b(Lcom/supercell/titan/da;)Lcom/android/vending/billing/IInAppBillingService;

    move-result-object v0

    if-nez v0, :cond_0

    iget-object v0, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    const/4 v1, 0x0

    invoke-static {v0, v1}, Lcom/supercell/titan/da;->b(Lcom/supercell/titan/da;Z)Z

    :goto_0
    invoke-static {}, Lcom/supercell/titan/GameApp;->getInstance()Lcom/supercell/titan/GameApp;

    move-result-object v0

    new-instance v1, Lcom/supercell/titan/dd;

    invoke-direct {v1, p0}, Lcom/supercell/titan/dd;-><init>(Lcom/supercell/titan/dc;)V

    invoke-virtual {v0, v1}, Lcom/supercell/titan/GameApp;->a(Ljava/lang/Runnable;)V

    return-void

    :cond_0
    iget-object v0, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    invoke-static {v0, v2}, Lcom/supercell/titan/da;->b(Lcom/supercell/titan/da;Z)Z

    goto :goto_0
.end method

.method public onServiceDisconnected(Landroid/content/ComponentName;)V
    .locals 2

    iget-object v0, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    const/4 v1, 0x0

    invoke-static {v0, v1}, Lcom/supercell/titan/da;->a(Lcom/supercell/titan/da;Lcom/android/vending/billing/IInAppBillingService;)Lcom/android/vending/billing/IInAppBillingService;

    iget-object v0, p0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    const/4 v1, 0x0

    invoke-static {v0, v1}, Lcom/supercell/titan/da;->a(Lcom/supercell/titan/da;Z)Z

    return-void
.end method
