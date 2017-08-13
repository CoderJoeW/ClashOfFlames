.class Lcom/supercell/titan/ae;
.super Ljava/lang/Object;

# interfaces
.implements Ljava/lang/Runnable;


# instance fields
.field final synthetic a:Lcom/supercell/titan/ad;


# direct methods
.method constructor <init>(Lcom/supercell/titan/ad;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/ae;->a:Lcom/supercell/titan/ad;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 0

    invoke-static {}, Lcom/supercell/titan/GoogleServiceClient;->onSignIn()V

    return-void
.end method
