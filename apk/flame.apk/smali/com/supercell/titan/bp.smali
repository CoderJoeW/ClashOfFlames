.class Lcom/supercell/titan/bp;
.super Ljava/lang/Object;

# interfaces
.implements Ljava/lang/Runnable;


# instance fields
.field final synthetic a:Lcom/supercell/titan/bn;


# direct methods
.method constructor <init>(Lcom/supercell/titan/bn;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/bp;->a:Lcom/supercell/titan/bn;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 0

    invoke-static {}, Lcom/supercell/titan/NativeFacebookManager;->facebookLogout()V

    return-void
.end method
