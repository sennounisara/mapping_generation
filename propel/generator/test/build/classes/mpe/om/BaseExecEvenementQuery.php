<?php


/**
 * Base class that represents a query for the 'exec_evenement' table.
 *
 * 
 *
 * @method CommonExecEvenementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecEvenementQuery orderByIdTypeEvenement($order = Criteria::ASC) Order by the id_type_evenement column
 * @method CommonExecEvenementQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecEvenementQuery orderByIdContractant($order = Criteria::ASC) Order by the id_contractant column
 * @method CommonExecEvenementQuery orderByIdPhase($order = Criteria::ASC) Order by the id_phase column
 * @method CommonExecEvenementQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecEvenementQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonExecEvenementQuery orderByDateDocument($order = Criteria::ASC) Order by the date_document column
 * @method CommonExecEvenementQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonExecEvenementQuery orderByOriginePiece($order = Criteria::ASC) Order by the origine_piece column
 * @method CommonExecEvenementQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonExecEvenementQuery orderByDateRejet($order = Criteria::ASC) Order by the date_rejet column
 * @method CommonExecEvenementQuery orderByIdAgentValidation($order = Criteria::ASC) Order by the id_agent_validation column
 * @method CommonExecEvenementQuery orderByIdAgentRejet($order = Criteria::ASC) Order by the id_agent_rejet column
 * @method CommonExecEvenementQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecEvenementQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecEvenementQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecEvenementQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecEvenementQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method CommonExecEvenementQuery orderByDateClotureParapheur($order = Criteria::ASC) Order by the date_cloture_parapheur column
 * @method CommonExecEvenementQuery orderByMotifRejet($order = Criteria::ASC) Order by the motif_rejet column
 * @method CommonExecEvenementQuery orderByMotifDarret($order = Criteria::ASC) Order by the motif_darret column
 * @method CommonExecEvenementQuery orderByTypeReception($order = Criteria::ASC) Order by the type_reception column
 * @method CommonExecEvenementQuery orderByPorteReception($order = Criteria::ASC) Order by the porte_reception column
 * @method CommonExecEvenementQuery orderByModePrononceReception($order = Criteria::ASC) Order by the mode_prononce_reception column
 * @method CommonExecEvenementQuery orderByPenaliteRetard($order = Criteria::ASC) Order by the penalite_retard column
 * @method CommonExecEvenementQuery orderByPrestationReception($order = Criteria::ASC) Order by the prestation_reception column
 * @method CommonExecEvenementQuery orderByDateReserve($order = Criteria::ASC) Order by the date_reserve column
 * @method CommonExecEvenementQuery orderByDelaiMaximalReserves($order = Criteria::ASC) Order by the delai_maximal_reserves column
 * @method CommonExecEvenementQuery orderByDetailReserve($order = Criteria::ASC) Order by the detail_reserve column
 * @method CommonExecEvenementQuery orderByOrdreEvenement($order = Criteria::ASC) Order by the ordre_evenement column
 * @method CommonExecEvenementQuery orderByDemande($order = Criteria::ASC) Order by the demande column
 * @method CommonExecEvenementQuery orderByIdParent($order = Criteria::ASC) Order by the id_parent column
 * @method CommonExecEvenementQuery orderByDateDerniereSynchronisation($order = Criteria::ASC) Order by the date_derniere_synchronisation column
 * @method CommonExecEvenementQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecEvenementQuery orderByIdFacture($order = Criteria::ASC) Order by the id_facture column
 *
 * @method CommonExecEvenementQuery groupById() Group by the id column
 * @method CommonExecEvenementQuery groupByIdTypeEvenement() Group by the id_type_evenement column
 * @method CommonExecEvenementQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecEvenementQuery groupByIdContractant() Group by the id_contractant column
 * @method CommonExecEvenementQuery groupByIdPhase() Group by the id_phase column
 * @method CommonExecEvenementQuery groupByStatut() Group by the statut column
 * @method CommonExecEvenementQuery groupByDate() Group by the date column
 * @method CommonExecEvenementQuery groupByDateDocument() Group by the date_document column
 * @method CommonExecEvenementQuery groupByCommentaire() Group by the commentaire column
 * @method CommonExecEvenementQuery groupByOriginePiece() Group by the origine_piece column
 * @method CommonExecEvenementQuery groupByDateValidation() Group by the date_validation column
 * @method CommonExecEvenementQuery groupByDateRejet() Group by the date_rejet column
 * @method CommonExecEvenementQuery groupByIdAgentValidation() Group by the id_agent_validation column
 * @method CommonExecEvenementQuery groupByIdAgentRejet() Group by the id_agent_rejet column
 * @method CommonExecEvenementQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecEvenementQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecEvenementQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecEvenementQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecEvenementQuery groupByIdParapheur() Group by the id_parapheur column
 * @method CommonExecEvenementQuery groupByDateClotureParapheur() Group by the date_cloture_parapheur column
 * @method CommonExecEvenementQuery groupByMotifRejet() Group by the motif_rejet column
 * @method CommonExecEvenementQuery groupByMotifDarret() Group by the motif_darret column
 * @method CommonExecEvenementQuery groupByTypeReception() Group by the type_reception column
 * @method CommonExecEvenementQuery groupByPorteReception() Group by the porte_reception column
 * @method CommonExecEvenementQuery groupByModePrononceReception() Group by the mode_prononce_reception column
 * @method CommonExecEvenementQuery groupByPenaliteRetard() Group by the penalite_retard column
 * @method CommonExecEvenementQuery groupByPrestationReception() Group by the prestation_reception column
 * @method CommonExecEvenementQuery groupByDateReserve() Group by the date_reserve column
 * @method CommonExecEvenementQuery groupByDelaiMaximalReserves() Group by the delai_maximal_reserves column
 * @method CommonExecEvenementQuery groupByDetailReserve() Group by the detail_reserve column
 * @method CommonExecEvenementQuery groupByOrdreEvenement() Group by the ordre_evenement column
 * @method CommonExecEvenementQuery groupByDemande() Group by the demande column
 * @method CommonExecEvenementQuery groupByIdParent() Group by the id_parent column
 * @method CommonExecEvenementQuery groupByDateDerniereSynchronisation() Group by the date_derniere_synchronisation column
 * @method CommonExecEvenementQuery groupByNumero() Group by the numero column
 * @method CommonExecEvenementQuery groupByIdFacture() Group by the id_facture column
 *
 * @method CommonExecEvenementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecEvenementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecEvenementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecEvenementQuery leftJoinCommonExecContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecEvenementQuery rightJoinCommonExecContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecEvenementQuery innerJoinCommonExecContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractant relation
 *
 * @method CommonExecEvenementQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecEvenementQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecEvenementQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecEvenementQuery leftJoinCommonExecPhase($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPhase relation
 * @method CommonExecEvenementQuery rightJoinCommonExecPhase($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPhase relation
 * @method CommonExecEvenementQuery innerJoinCommonExecPhase($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPhase relation
 *
 * @method CommonExecEvenementQuery leftJoinCommonExecTypeEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeEvenement relation
 * @method CommonExecEvenementQuery rightJoinCommonExecTypeEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeEvenement relation
 * @method CommonExecEvenementQuery innerJoinCommonExecTypeEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeEvenement relation
 *
 * @method CommonExecEvenementQuery leftJoinCommonExecPieceEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonExecEvenementQuery rightJoinCommonExecPieceEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonExecEvenementQuery innerJoinCommonExecPieceEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceEvenement relation
 *
 * @method CommonExecEvenement findOne(PropelPDO $con = null) Return the first CommonExecEvenement matching the query
 * @method CommonExecEvenement findOneOrCreate(PropelPDO $con = null) Return the first CommonExecEvenement matching the query, or a new CommonExecEvenement object populated from the query conditions when no match is found
 *
 * @method CommonExecEvenement findOneByIdTypeEvenement(int $id_type_evenement) Return the first CommonExecEvenement filtered by the id_type_evenement column
 * @method CommonExecEvenement findOneByIdContrat(int $id_contrat) Return the first CommonExecEvenement filtered by the id_contrat column
 * @method CommonExecEvenement findOneByIdContractant(int $id_contractant) Return the first CommonExecEvenement filtered by the id_contractant column
 * @method CommonExecEvenement findOneByIdPhase(int $id_phase) Return the first CommonExecEvenement filtered by the id_phase column
 * @method CommonExecEvenement findOneByStatut(int $statut) Return the first CommonExecEvenement filtered by the statut column
 * @method CommonExecEvenement findOneByDate(string $date) Return the first CommonExecEvenement filtered by the date column
 * @method CommonExecEvenement findOneByDateDocument(string $date_document) Return the first CommonExecEvenement filtered by the date_document column
 * @method CommonExecEvenement findOneByCommentaire(string $commentaire) Return the first CommonExecEvenement filtered by the commentaire column
 * @method CommonExecEvenement findOneByOriginePiece(int $origine_piece) Return the first CommonExecEvenement filtered by the origine_piece column
 * @method CommonExecEvenement findOneByDateValidation(string $date_validation) Return the first CommonExecEvenement filtered by the date_validation column
 * @method CommonExecEvenement findOneByDateRejet(string $date_rejet) Return the first CommonExecEvenement filtered by the date_rejet column
 * @method CommonExecEvenement findOneByIdAgentValidation(int $id_agent_validation) Return the first CommonExecEvenement filtered by the id_agent_validation column
 * @method CommonExecEvenement findOneByIdAgentRejet(int $id_agent_rejet) Return the first CommonExecEvenement filtered by the id_agent_rejet column
 * @method CommonExecEvenement findOneByDateCrea(string $date_crea) Return the first CommonExecEvenement filtered by the date_crea column
 * @method CommonExecEvenement findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecEvenement filtered by the id_agent_crea column
 * @method CommonExecEvenement findOneByDateModif(string $date_modif) Return the first CommonExecEvenement filtered by the date_modif column
 * @method CommonExecEvenement findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecEvenement filtered by the id_agent_modif column
 * @method CommonExecEvenement findOneByIdParapheur(int $id_parapheur) Return the first CommonExecEvenement filtered by the id_parapheur column
 * @method CommonExecEvenement findOneByDateClotureParapheur(string $date_cloture_parapheur) Return the first CommonExecEvenement filtered by the date_cloture_parapheur column
 * @method CommonExecEvenement findOneByMotifRejet(string $motif_rejet) Return the first CommonExecEvenement filtered by the motif_rejet column
 * @method CommonExecEvenement findOneByMotifDarret(string $motif_darret) Return the first CommonExecEvenement filtered by the motif_darret column
 * @method CommonExecEvenement findOneByTypeReception(string $type_reception) Return the first CommonExecEvenement filtered by the type_reception column
 * @method CommonExecEvenement findOneByPorteReception(string $porte_reception) Return the first CommonExecEvenement filtered by the porte_reception column
 * @method CommonExecEvenement findOneByModePrononceReception(string $mode_prononce_reception) Return the first CommonExecEvenement filtered by the mode_prononce_reception column
 * @method CommonExecEvenement findOneByPenaliteRetard(string $penalite_retard) Return the first CommonExecEvenement filtered by the penalite_retard column
 * @method CommonExecEvenement findOneByPrestationReception(string $prestation_reception) Return the first CommonExecEvenement filtered by the prestation_reception column
 * @method CommonExecEvenement findOneByDateReserve(string $date_reserve) Return the first CommonExecEvenement filtered by the date_reserve column
 * @method CommonExecEvenement findOneByDelaiMaximalReserves(int $delai_maximal_reserves) Return the first CommonExecEvenement filtered by the delai_maximal_reserves column
 * @method CommonExecEvenement findOneByDetailReserve(string $detail_reserve) Return the first CommonExecEvenement filtered by the detail_reserve column
 * @method CommonExecEvenement findOneByOrdreEvenement(int $ordre_evenement) Return the first CommonExecEvenement filtered by the ordre_evenement column
 * @method CommonExecEvenement findOneByDemande(string $demande) Return the first CommonExecEvenement filtered by the demande column
 * @method CommonExecEvenement findOneByIdParent(int $id_parent) Return the first CommonExecEvenement filtered by the id_parent column
 * @method CommonExecEvenement findOneByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return the first CommonExecEvenement filtered by the date_derniere_synchronisation column
 * @method CommonExecEvenement findOneByNumero(string $numero) Return the first CommonExecEvenement filtered by the numero column
 * @method CommonExecEvenement findOneByIdFacture(int $id_facture) Return the first CommonExecEvenement filtered by the id_facture column
 *
 * @method array findById(int $id) Return CommonExecEvenement objects filtered by the id column
 * @method array findByIdTypeEvenement(int $id_type_evenement) Return CommonExecEvenement objects filtered by the id_type_evenement column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecEvenement objects filtered by the id_contrat column
 * @method array findByIdContractant(int $id_contractant) Return CommonExecEvenement objects filtered by the id_contractant column
 * @method array findByIdPhase(int $id_phase) Return CommonExecEvenement objects filtered by the id_phase column
 * @method array findByStatut(int $statut) Return CommonExecEvenement objects filtered by the statut column
 * @method array findByDate(string $date) Return CommonExecEvenement objects filtered by the date column
 * @method array findByDateDocument(string $date_document) Return CommonExecEvenement objects filtered by the date_document column
 * @method array findByCommentaire(string $commentaire) Return CommonExecEvenement objects filtered by the commentaire column
 * @method array findByOriginePiece(int $origine_piece) Return CommonExecEvenement objects filtered by the origine_piece column
 * @method array findByDateValidation(string $date_validation) Return CommonExecEvenement objects filtered by the date_validation column
 * @method array findByDateRejet(string $date_rejet) Return CommonExecEvenement objects filtered by the date_rejet column
 * @method array findByIdAgentValidation(int $id_agent_validation) Return CommonExecEvenement objects filtered by the id_agent_validation column
 * @method array findByIdAgentRejet(int $id_agent_rejet) Return CommonExecEvenement objects filtered by the id_agent_rejet column
 * @method array findByDateCrea(string $date_crea) Return CommonExecEvenement objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecEvenement objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return CommonExecEvenement objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecEvenement objects filtered by the id_agent_modif column
 * @method array findByIdParapheur(int $id_parapheur) Return CommonExecEvenement objects filtered by the id_parapheur column
 * @method array findByDateClotureParapheur(string $date_cloture_parapheur) Return CommonExecEvenement objects filtered by the date_cloture_parapheur column
 * @method array findByMotifRejet(string $motif_rejet) Return CommonExecEvenement objects filtered by the motif_rejet column
 * @method array findByMotifDarret(string $motif_darret) Return CommonExecEvenement objects filtered by the motif_darret column
 * @method array findByTypeReception(string $type_reception) Return CommonExecEvenement objects filtered by the type_reception column
 * @method array findByPorteReception(string $porte_reception) Return CommonExecEvenement objects filtered by the porte_reception column
 * @method array findByModePrononceReception(string $mode_prononce_reception) Return CommonExecEvenement objects filtered by the mode_prononce_reception column
 * @method array findByPenaliteRetard(string $penalite_retard) Return CommonExecEvenement objects filtered by the penalite_retard column
 * @method array findByPrestationReception(string $prestation_reception) Return CommonExecEvenement objects filtered by the prestation_reception column
 * @method array findByDateReserve(string $date_reserve) Return CommonExecEvenement objects filtered by the date_reserve column
 * @method array findByDelaiMaximalReserves(int $delai_maximal_reserves) Return CommonExecEvenement objects filtered by the delai_maximal_reserves column
 * @method array findByDetailReserve(string $detail_reserve) Return CommonExecEvenement objects filtered by the detail_reserve column
 * @method array findByOrdreEvenement(int $ordre_evenement) Return CommonExecEvenement objects filtered by the ordre_evenement column
 * @method array findByDemande(string $demande) Return CommonExecEvenement objects filtered by the demande column
 * @method array findByIdParent(int $id_parent) Return CommonExecEvenement objects filtered by the id_parent column
 * @method array findByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return CommonExecEvenement objects filtered by the date_derniere_synchronisation column
 * @method array findByNumero(string $numero) Return CommonExecEvenement objects filtered by the numero column
 * @method array findByIdFacture(int $id_facture) Return CommonExecEvenement objects filtered by the id_facture column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecEvenementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecEvenementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecEvenement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecEvenementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecEvenementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecEvenementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecEvenementQuery) {
            return $criteria;
        }
        $query = new CommonExecEvenementQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonExecEvenement|CommonExecEvenement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecEvenementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonExecEvenement A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonExecEvenement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_type_evenement`, `id_contrat`, `id_contractant`, `id_phase`, `statut`, `date`, `date_document`, `commentaire`, `origine_piece`, `date_validation`, `date_rejet`, `id_agent_validation`, `id_agent_rejet`, `date_crea`, `id_agent_crea`, `date_modif`, `id_agent_modif`, `id_parapheur`, `date_cloture_parapheur`, `motif_rejet`, `motif_darret`, `type_reception`, `porte_reception`, `mode_prononce_reception`, `penalite_retard`, `prestation_reception`, `date_reserve`, `delai_maximal_reserves`, `detail_reserve`, `ordre_evenement`, `demande`, `id_parent`, `date_derniere_synchronisation`, `numero`, `id_facture` FROM `exec_evenement` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonExecEvenement();
            $obj->hydrate($row);
            CommonExecEvenementPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonExecEvenement|CommonExecEvenement[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonExecEvenement[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecEvenementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecEvenementPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_type_evenement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeEvenement(1234); // WHERE id_type_evenement = 1234
     * $query->filterByIdTypeEvenement(array(12, 34)); // WHERE id_type_evenement IN (12, 34)
     * $query->filterByIdTypeEvenement(array('min' => 12)); // WHERE id_type_evenement >= 12
     * $query->filterByIdTypeEvenement(array('max' => 12)); // WHERE id_type_evenement <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeEvenement()
     *
     * @param     mixed $idTypeEvenement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdTypeEvenement($idTypeEvenement = null, $comparison = null)
    {
        if (is_array($idTypeEvenement)) {
            $useMinMax = false;
            if (isset($idTypeEvenement['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, $idTypeEvenement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeEvenement['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, $idTypeEvenement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, $idTypeEvenement, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_contractant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContractant(1234); // WHERE id_contractant = 1234
     * $query->filterByIdContractant(array(12, 34)); // WHERE id_contractant IN (12, 34)
     * $query->filterByIdContractant(array('min' => 12)); // WHERE id_contractant >= 12
     * $query->filterByIdContractant(array('max' => 12)); // WHERE id_contractant <= 12
     * </code>
     *
     * @see       filterByCommonExecContractant()
     *
     * @param     mixed $idContractant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdContractant($idContractant = null, $comparison = null)
    {
        if (is_array($idContractant)) {
            $useMinMax = false;
            if (isset($idContractant['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_CONTRACTANT, $idContractant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContractant['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_CONTRACTANT, $idContractant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_CONTRACTANT, $idContractant, $comparison);
    }

    /**
     * Filter the query on the id_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPhase(1234); // WHERE id_phase = 1234
     * $query->filterByIdPhase(array(12, 34)); // WHERE id_phase IN (12, 34)
     * $query->filterByIdPhase(array('min' => 12)); // WHERE id_phase >= 12
     * $query->filterByIdPhase(array('max' => 12)); // WHERE id_phase <= 12
     * </code>
     *
     * @see       filterByCommonExecPhase()
     *
     * @param     mixed $idPhase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdPhase($idPhase = null, $comparison = null)
    {
        if (is_array($idPhase)) {
            $useMinMax = false;
            if (isset($idPhase['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_PHASE, $idPhase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPhase['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_PHASE, $idPhase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_PHASE, $idPhase, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the date_document column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDocument('2011-03-14'); // WHERE date_document = '2011-03-14'
     * $query->filterByDateDocument('now'); // WHERE date_document = '2011-03-14'
     * $query->filterByDateDocument(array('max' => 'yesterday')); // WHERE date_document > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDocument The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateDocument($dateDocument = null, $comparison = null)
    {
        if (is_array($dateDocument)) {
            $useMinMax = false;
            if (isset($dateDocument['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_DOCUMENT, $dateDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDocument['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_DOCUMENT, $dateDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_DOCUMENT, $dateDocument, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the origine_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginePiece(1234); // WHERE origine_piece = 1234
     * $query->filterByOriginePiece(array(12, 34)); // WHERE origine_piece IN (12, 34)
     * $query->filterByOriginePiece(array('min' => 12)); // WHERE origine_piece >= 12
     * $query->filterByOriginePiece(array('max' => 12)); // WHERE origine_piece <= 12
     * </code>
     *
     * @param     mixed $originePiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByOriginePiece($originePiece = null, $comparison = null)
    {
        if (is_array($originePiece)) {
            $useMinMax = false;
            if (isset($originePiece['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ORIGINE_PIECE, $originePiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originePiece['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ORIGINE_PIECE, $originePiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ORIGINE_PIECE, $originePiece, $comparison);
    }

    /**
     * Filter the query on the date_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('2011-03-14'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation('now'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation(array('max' => 'yesterday')); // WHERE date_validation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the date_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRejet('2011-03-14'); // WHERE date_rejet = '2011-03-14'
     * $query->filterByDateRejet('now'); // WHERE date_rejet = '2011-03-14'
     * $query->filterByDateRejet(array('max' => 'yesterday')); // WHERE date_rejet > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRejet The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateRejet($dateRejet = null, $comparison = null)
    {
        if (is_array($dateRejet)) {
            $useMinMax = false;
            if (isset($dateRejet['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_REJET, $dateRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejet['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_REJET, $dateRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_REJET, $dateRejet, $comparison);
    }

    /**
     * Filter the query on the id_agent_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentValidation(1234); // WHERE id_agent_validation = 1234
     * $query->filterByIdAgentValidation(array(12, 34)); // WHERE id_agent_validation IN (12, 34)
     * $query->filterByIdAgentValidation(array('min' => 12)); // WHERE id_agent_validation >= 12
     * $query->filterByIdAgentValidation(array('max' => 12)); // WHERE id_agent_validation <= 12
     * </code>
     *
     * @param     mixed $idAgentValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidation($idAgentValidation = null, $comparison = null)
    {
        if (is_array($idAgentValidation)) {
            $useMinMax = false;
            if (isset($idAgentValidation['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_VALIDATION, $idAgentValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidation['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_VALIDATION, $idAgentValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_VALIDATION, $idAgentValidation, $comparison);
    }

    /**
     * Filter the query on the id_agent_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentRejet(1234); // WHERE id_agent_rejet = 1234
     * $query->filterByIdAgentRejet(array(12, 34)); // WHERE id_agent_rejet IN (12, 34)
     * $query->filterByIdAgentRejet(array('min' => 12)); // WHERE id_agent_rejet >= 12
     * $query->filterByIdAgentRejet(array('max' => 12)); // WHERE id_agent_rejet <= 12
     * </code>
     *
     * @param     mixed $idAgentRejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdAgentRejet($idAgentRejet = null, $comparison = null)
    {
        if (is_array($idAgentRejet)) {
            $useMinMax = false;
            if (isset($idAgentRejet['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_REJET, $idAgentRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRejet['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_REJET, $idAgentRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_REJET, $idAgentRejet, $comparison);
    }

    /**
     * Filter the query on the date_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE date_crea > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the id_agent_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCrea(1234); // WHERE id_agent_crea = 1234
     * $query->filterByIdAgentCrea(array(12, 34)); // WHERE id_agent_crea IN (12, 34)
     * $query->filterByIdAgentCrea(array('min' => 12)); // WHERE id_agent_crea >= 12
     * $query->filterByIdAgentCrea(array('max' => 12)); // WHERE id_agent_crea <= 12
     * </code>
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('2011-03-14'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif('now'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif(array('max' => 'yesterday')); // WHERE date_modif > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the id_agent_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentModif(1234); // WHERE id_agent_modif = 1234
     * $query->filterByIdAgentModif(array(12, 34)); // WHERE id_agent_modif IN (12, 34)
     * $query->filterByIdAgentModif(array('min' => 12)); // WHERE id_agent_modif >= 12
     * $query->filterByIdAgentModif(array('max' => 12)); // WHERE id_agent_modif <= 12
     * </code>
     *
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query on the id_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParapheur(1234); // WHERE id_parapheur = 1234
     * $query->filterByIdParapheur(array(12, 34)); // WHERE id_parapheur IN (12, 34)
     * $query->filterByIdParapheur(array('min' => 12)); // WHERE id_parapheur >= 12
     * $query->filterByIdParapheur(array('max' => 12)); // WHERE id_parapheur <= 12
     * </code>
     *
     * @param     mixed $idParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_PARAPHEUR, $idParapheur, $comparison);
    }

    /**
     * Filter the query on the date_cloture_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByDateClotureParapheur('2011-03-14'); // WHERE date_cloture_parapheur = '2011-03-14'
     * $query->filterByDateClotureParapheur('now'); // WHERE date_cloture_parapheur = '2011-03-14'
     * $query->filterByDateClotureParapheur(array('max' => 'yesterday')); // WHERE date_cloture_parapheur > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateClotureParapheur The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateClotureParapheur($dateClotureParapheur = null, $comparison = null)
    {
        if (is_array($dateClotureParapheur)) {
            $useMinMax = false;
            if (isset($dateClotureParapheur['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClotureParapheur['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur, $comparison);
    }

    /**
     * Filter the query on the motif_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifRejet('fooValue');   // WHERE motif_rejet = 'fooValue'
     * $query->filterByMotifRejet('%fooValue%'); // WHERE motif_rejet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifRejet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByMotifRejet($motifRejet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifRejet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifRejet)) {
                $motifRejet = str_replace('*', '%', $motifRejet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::MOTIF_REJET, $motifRejet, $comparison);
    }

    /**
     * Filter the query on the motif_darret column
     *
     * Example usage:
     * <code>
     * $query->filterByMotifDarret('fooValue');   // WHERE motif_darret = 'fooValue'
     * $query->filterByMotifDarret('%fooValue%'); // WHERE motif_darret LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motifDarret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByMotifDarret($motifDarret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motifDarret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motifDarret)) {
                $motifDarret = str_replace('*', '%', $motifDarret);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::MOTIF_DARRET, $motifDarret, $comparison);
    }

    /**
     * Filter the query on the type_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeReception('fooValue');   // WHERE type_reception = 'fooValue'
     * $query->filterByTypeReception('%fooValue%'); // WHERE type_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByTypeReception($typeReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeReception)) {
                $typeReception = str_replace('*', '%', $typeReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::TYPE_RECEPTION, $typeReception, $comparison);
    }

    /**
     * Filter the query on the porte_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByPorteReception('fooValue');   // WHERE porte_reception = 'fooValue'
     * $query->filterByPorteReception('%fooValue%'); // WHERE porte_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $porteReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByPorteReception($porteReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($porteReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $porteReception)) {
                $porteReception = str_replace('*', '%', $porteReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::PORTE_RECEPTION, $porteReception, $comparison);
    }

    /**
     * Filter the query on the mode_prononce_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByModePrononceReception('fooValue');   // WHERE mode_prononce_reception = 'fooValue'
     * $query->filterByModePrononceReception('%fooValue%'); // WHERE mode_prononce_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modePrononceReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByModePrononceReception($modePrononceReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modePrononceReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modePrononceReception)) {
                $modePrononceReception = str_replace('*', '%', $modePrononceReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION, $modePrononceReception, $comparison);
    }

    /**
     * Filter the query on the penalite_retard column
     *
     * Example usage:
     * <code>
     * $query->filterByPenaliteRetard('fooValue');   // WHERE penalite_retard = 'fooValue'
     * $query->filterByPenaliteRetard('%fooValue%'); // WHERE penalite_retard LIKE '%fooValue%'
     * </code>
     *
     * @param     string $penaliteRetard The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByPenaliteRetard($penaliteRetard = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($penaliteRetard)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $penaliteRetard)) {
                $penaliteRetard = str_replace('*', '%', $penaliteRetard);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::PENALITE_RETARD, $penaliteRetard, $comparison);
    }

    /**
     * Filter the query on the prestation_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByPrestationReception('fooValue');   // WHERE prestation_reception = 'fooValue'
     * $query->filterByPrestationReception('%fooValue%'); // WHERE prestation_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prestationReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByPrestationReception($prestationReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prestationReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prestationReception)) {
                $prestationReception = str_replace('*', '%', $prestationReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::PRESTATION_RECEPTION, $prestationReception, $comparison);
    }

    /**
     * Filter the query on the date_reserve column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReserve('2011-03-14'); // WHERE date_reserve = '2011-03-14'
     * $query->filterByDateReserve('now'); // WHERE date_reserve = '2011-03-14'
     * $query->filterByDateReserve(array('max' => 'yesterday')); // WHERE date_reserve > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReserve The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateReserve($dateReserve = null, $comparison = null)
    {
        if (is_array($dateReserve)) {
            $useMinMax = false;
            if (isset($dateReserve['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_RESERVE, $dateReserve['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReserve['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_RESERVE, $dateReserve['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_RESERVE, $dateReserve, $comparison);
    }

    /**
     * Filter the query on the delai_maximal_reserves column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiMaximalReserves(1234); // WHERE delai_maximal_reserves = 1234
     * $query->filterByDelaiMaximalReserves(array(12, 34)); // WHERE delai_maximal_reserves IN (12, 34)
     * $query->filterByDelaiMaximalReserves(array('min' => 12)); // WHERE delai_maximal_reserves >= 12
     * $query->filterByDelaiMaximalReserves(array('max' => 12)); // WHERE delai_maximal_reserves <= 12
     * </code>
     *
     * @param     mixed $delaiMaximalReserves The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDelaiMaximalReserves($delaiMaximalReserves = null, $comparison = null)
    {
        if (is_array($delaiMaximalReserves)) {
            $useMinMax = false;
            if (isset($delaiMaximalReserves['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES, $delaiMaximalReserves['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiMaximalReserves['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES, $delaiMaximalReserves['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES, $delaiMaximalReserves, $comparison);
    }

    /**
     * Filter the query on the detail_reserve column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailReserve('fooValue');   // WHERE detail_reserve = 'fooValue'
     * $query->filterByDetailReserve('%fooValue%'); // WHERE detail_reserve LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailReserve The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDetailReserve($detailReserve = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailReserve)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailReserve)) {
                $detailReserve = str_replace('*', '%', $detailReserve);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DETAIL_RESERVE, $detailReserve, $comparison);
    }

    /**
     * Filter the query on the ordre_evenement column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdreEvenement(1234); // WHERE ordre_evenement = 1234
     * $query->filterByOrdreEvenement(array(12, 34)); // WHERE ordre_evenement IN (12, 34)
     * $query->filterByOrdreEvenement(array('min' => 12)); // WHERE ordre_evenement >= 12
     * $query->filterByOrdreEvenement(array('max' => 12)); // WHERE ordre_evenement <= 12
     * </code>
     *
     * @param     mixed $ordreEvenement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByOrdreEvenement($ordreEvenement = null, $comparison = null)
    {
        if (is_array($ordreEvenement)) {
            $useMinMax = false;
            if (isset($ordreEvenement['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ORDRE_EVENEMENT, $ordreEvenement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordreEvenement['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ORDRE_EVENEMENT, $ordreEvenement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ORDRE_EVENEMENT, $ordreEvenement, $comparison);
    }

    /**
     * Filter the query on the demande column
     *
     * Example usage:
     * <code>
     * $query->filterByDemande('fooValue');   // WHERE demande = 'fooValue'
     * $query->filterByDemande('%fooValue%'); // WHERE demande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $demande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDemande($demande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($demande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $demande)) {
                $demande = str_replace('*', '%', $demande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DEMANDE, $demande, $comparison);
    }

    /**
     * Filter the query on the id_parent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParent(1234); // WHERE id_parent = 1234
     * $query->filterByIdParent(array(12, 34)); // WHERE id_parent IN (12, 34)
     * $query->filterByIdParent(array('min' => 12)); // WHERE id_parent >= 12
     * $query->filterByIdParent(array('max' => 12)); // WHERE id_parent <= 12
     * </code>
     *
     * @param     mixed $idParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdParent($idParent = null, $comparison = null)
    {
        if (is_array($idParent)) {
            $useMinMax = false;
            if (isset($idParent['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_PARENT, $idParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParent['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_PARENT, $idParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_PARENT, $idParent, $comparison);
    }

    /**
     * Filter the query on the date_derniere_synchronisation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDerniereSynchronisation('2011-03-14'); // WHERE date_derniere_synchronisation = '2011-03-14'
     * $query->filterByDateDerniereSynchronisation('now'); // WHERE date_derniere_synchronisation = '2011-03-14'
     * $query->filterByDateDerniereSynchronisation(array('max' => 'yesterday')); // WHERE date_derniere_synchronisation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDerniereSynchronisation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByDateDerniereSynchronisation($dateDerniereSynchronisation = null, $comparison = null)
    {
        if (is_array($dateDerniereSynchronisation)) {
            $useMinMax = false;
            if (isset($dateDerniereSynchronisation['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDerniereSynchronisation['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero('fooValue');   // WHERE numero = 'fooValue'
     * $query->filterByNumero('%fooValue%'); // WHERE numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numero)) {
                $numero = str_replace('*', '%', $numero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the id_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFacture(1234); // WHERE id_facture = 1234
     * $query->filterByIdFacture(array(12, 34)); // WHERE id_facture IN (12, 34)
     * $query->filterByIdFacture(array('min' => 12)); // WHERE id_facture >= 12
     * $query->filterByIdFacture(array('max' => 12)); // WHERE id_facture <= 12
     * </code>
     *
     * @param     mixed $idFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function filterByIdFacture($idFacture = null, $comparison = null)
    {
        if (is_array($idFacture)) {
            $useMinMax = false;
            if (isset($idFacture['min'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_FACTURE, $idFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFacture['max'])) {
                $this->addUsingAlias(CommonExecEvenementPeer::ID_FACTURE, $idFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecEvenementPeer::ID_FACTURE, $idFacture, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractant($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_CONTRACTANT, $commonExecContractant->getId(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_CONTRACTANT, $commonExecContractant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContractant() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecContractant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractant');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecContractant');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractant relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContractant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractant', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContrat() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecContrat relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecPhase object
     *
     * @param   CommonExecPhase|PropelObjectCollection $commonExecPhase The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPhase($commonExecPhase, $comparison = null)
    {
        if ($commonExecPhase instanceof CommonExecPhase) {
            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_PHASE, $commonExecPhase->getId(), $comparison);
        } elseif ($commonExecPhase instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_PHASE, $commonExecPhase->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecPhase() only accepts arguments of type CommonExecPhase or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPhase relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecPhase($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPhase');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecPhase');
        }

        return $this;
    }

    /**
     * Use the CommonExecPhase relation CommonExecPhase object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPhaseQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPhaseQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPhase($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPhase', 'CommonExecPhaseQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeEvenement object
     *
     * @param   CommonExecTypeEvenement|PropelObjectCollection $commonExecTypeEvenement The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeEvenement($commonExecTypeEvenement, $comparison = null)
    {
        if ($commonExecTypeEvenement instanceof CommonExecTypeEvenement) {
            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, $commonExecTypeEvenement->getId(), $comparison);
        } elseif ($commonExecTypeEvenement instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, $commonExecTypeEvenement->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeEvenement() only accepts arguments of type CommonExecTypeEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeEvenement');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecTypeEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeEvenement relation CommonExecTypeEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeEvenement', 'CommonExecTypeEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceEvenement object
     *
     * @param   CommonExecPieceEvenement|PropelObjectCollection $commonExecPieceEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceEvenement($commonExecPieceEvenement, $comparison = null)
    {
        if ($commonExecPieceEvenement instanceof CommonExecPieceEvenement) {
            return $this
                ->addUsingAlias(CommonExecEvenementPeer::ID, $commonExecPieceEvenement->getIdEvenement(), $comparison);
        } elseif ($commonExecPieceEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceEvenementQuery()
                ->filterByPrimaryKeys($commonExecPieceEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceEvenement() only accepts arguments of type CommonExecPieceEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceEvenement');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecPieceEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceEvenement relation CommonExecPieceEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPieceEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceEvenement', 'CommonExecPieceEvenementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecEvenement $commonExecEvenement Object to remove from the list of results
     *
     * @return CommonExecEvenementQuery The current query, for fluid interface
     */
    public function prune($commonExecEvenement = null)
    {
        if ($commonExecEvenement) {
            $this->addUsingAlias(CommonExecEvenementPeer::ID, $commonExecEvenement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
