.class Lcom/supercell/titan/dd;
.super Ljava/lang/Object;

# interfaces
.implements Ljava/lang/Runnable;


# instance fields
.field final synthetic a:Lcom/supercell/titan/dc;


# direct methods
.method constructor <init>(Lcom/supercell/titan/dc;)V
    .locals 0

    iput-object p1, p0, Lcom/supercell/titan/dd;->a:Lcom/supercell/titan/dc;

    invoke-direct {p0}, Ljava/lang/Object;-><init>()V

    return-void
.end method


# virtual methods
.method public run()V
    .locals 1

    iget-object v0, p0, Lcom/supercell/titan/dd;->a:Lcom/supercell/titan/dc;

    iget-object v0, v0, Lcom/supercell/titan/dc;->a:Lcom/supercell/titan/da;

    invoke-static {v0}, Lcom/supercell/titan/da;->c(Lcom/supercell/titan/da;)V

    return-void
.end method
