<?php


/**
 * Base class that represents a query for the 'decisionEnveloppe' table.
 *
 * 
 *
 * @method CommonDecisionEnveloppeQuery orderByIdDecisionEnveloppe($order = Criteria::ASC) Order by the id_decision_enveloppe column
 * @method CommonDecisionEnveloppeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDecisionEnveloppeQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonDecisionEnveloppeQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonDecisionEnveloppeQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonDecisionEnveloppeQuery orderByDecision($order = Criteria::ASC) Order by the decision column
 * @method CommonDecisionEnveloppeQuery orderByDateNotification($order = Criteria::ASC) Order by the date_notification column
 * @method CommonDecisionEnveloppeQuery orderByCodePostal($order = Criteria::ASC) Order by the code_postal column
 * @method CommonDecisionEnveloppeQuery orderByPmePmi($order = Criteria::ASC) Order by the pme_pmi column
 * @method CommonDecisionEnveloppeQuery orderByTrancheBudgetaire($order = Criteria::ASC) Order by the tranche_budgetaire column
 * @method CommonDecisionEnveloppeQuery orderByMontantMarche($order = Criteria::ASC) Order by the montant_marche column
 * @method CommonDecisionEnveloppeQuery orderByCategorie($order = Criteria::ASC) Order by the categorie column
 * @method CommonDecisionEnveloppeQuery orderByObjetMarche($order = Criteria::ASC) Order by the objet_marche column
 * @method CommonDecisionEnveloppeQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonDecisionEnveloppeQuery orderByFichierJoint($order = Criteria::ASC) Order by the fichier_joint column
 * @method CommonDecisionEnveloppeQuery orderByNomFichierJoint($order = Criteria::ASC) Order by the nom_fichier_joint column
 * @method CommonDecisionEnveloppeQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonDecisionEnveloppeQuery orderByNumeroMarche($order = Criteria::ASC) Order by the numero_marche column
 * @method CommonDecisionEnveloppeQuery orderByStatutej($order = Criteria::ASC) Order by the statutEJ column
 * @method CommonDecisionEnveloppeQuery orderByNote($order = Criteria::ASC) Order by the note column
 * @method CommonDecisionEnveloppeQuery orderByClassement($order = Criteria::ASC) Order by the classement column
 * @method CommonDecisionEnveloppeQuery orderByIdBlobPiecesNotification($order = Criteria::ASC) Order by the id_blob_pieces_notification column
 * @method CommonDecisionEnveloppeQuery orderByDateFinMarchePrevisionnel($order = Criteria::ASC) Order by the date_fin_marche_previsionnel column
 * @method CommonDecisionEnveloppeQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonDecisionEnveloppeQuery orderByAcronymepaysAttributaire($order = Criteria::ASC) Order by the acronymePays_Attributaire column
 * @method CommonDecisionEnveloppeQuery orderByPaysAttributaire($order = Criteria::ASC) Order by the pays_Attributaire column
 * @method CommonDecisionEnveloppeQuery orderBySirenAttributaire($order = Criteria::ASC) Order by the siren_Attributaire column
 * @method CommonDecisionEnveloppeQuery orderByNicAttributaire($order = Criteria::ASC) Order by the nic_Attributaire column
 * @method CommonDecisionEnveloppeQuery orderByIdentifiantnationalAttributaire($order = Criteria::ASC) Order by the identifiantNational_Attributaire column
 * @method CommonDecisionEnveloppeQuery orderByRcVilleAttributaire($order = Criteria::ASC) Order by the rc_ville_attributaire column
 * @method CommonDecisionEnveloppeQuery orderByRcNumAttributaire($order = Criteria::ASC) Order by the rc_num_attributaire column
 * @method CommonDecisionEnveloppeQuery orderByDateNotificationReelle($order = Criteria::ASC) Order by the date_notification_reelle column
 * @method CommonDecisionEnveloppeQuery orderByDateFinMarcheReelle($order = Criteria::ASC) Order by the date_fin_marche_reelle column
 * @method CommonDecisionEnveloppeQuery orderByEnvoiInterface($order = Criteria::ASC) Order by the envoi_interface column
 * @method CommonDecisionEnveloppeQuery orderByIfuAttributaire($order = Criteria::ASC) Order by the ifu_attributaire column
 * @method CommonDecisionEnveloppeQuery orderByTypeEntreprise($order = Criteria::ASC) Order by the type_entreprise column
 *
 * @method CommonDecisionEnveloppeQuery groupByIdDecisionEnveloppe() Group by the id_decision_enveloppe column
 * @method CommonDecisionEnveloppeQuery groupByOrganisme() Group by the organisme column
 * @method CommonDecisionEnveloppeQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonDecisionEnveloppeQuery groupByIdOffre() Group by the id_offre column
 * @method CommonDecisionEnveloppeQuery groupByLot() Group by the lot column
 * @method CommonDecisionEnveloppeQuery groupByDecision() Group by the decision column
 * @method CommonDecisionEnveloppeQuery groupByDateNotification() Group by the date_notification column
 * @method CommonDecisionEnveloppeQuery groupByCodePostal() Group by the code_postal column
 * @method CommonDecisionEnveloppeQuery groupByPmePmi() Group by the pme_pmi column
 * @method CommonDecisionEnveloppeQuery groupByTrancheBudgetaire() Group by the tranche_budgetaire column
 * @method CommonDecisionEnveloppeQuery groupByMontantMarche() Group by the montant_marche column
 * @method CommonDecisionEnveloppeQuery groupByCategorie() Group by the categorie column
 * @method CommonDecisionEnveloppeQuery groupByObjetMarche() Group by the objet_marche column
 * @method CommonDecisionEnveloppeQuery groupByCommentaire() Group by the commentaire column
 * @method CommonDecisionEnveloppeQuery groupByFichierJoint() Group by the fichier_joint column
 * @method CommonDecisionEnveloppeQuery groupByNomFichierJoint() Group by the nom_fichier_joint column
 * @method CommonDecisionEnveloppeQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonDecisionEnveloppeQuery groupByNumeroMarche() Group by the numero_marche column
 * @method CommonDecisionEnveloppeQuery groupByStatutej() Group by the statutEJ column
 * @method CommonDecisionEnveloppeQuery groupByNote() Group by the note column
 * @method CommonDecisionEnveloppeQuery groupByClassement() Group by the classement column
 * @method CommonDecisionEnveloppeQuery groupByIdBlobPiecesNotification() Group by the id_blob_pieces_notification column
 * @method CommonDecisionEnveloppeQuery groupByDateFinMarchePrevisionnel() Group by the date_fin_marche_previsionnel column
 * @method CommonDecisionEnveloppeQuery groupByVille() Group by the ville column
 * @method CommonDecisionEnveloppeQuery groupByAcronymepaysAttributaire() Group by the acronymePays_Attributaire column
 * @method CommonDecisionEnveloppeQuery groupByPaysAttributaire() Group by the pays_Attributaire column
 * @method CommonDecisionEnveloppeQuery groupBySirenAttributaire() Group by the siren_Attributaire column
 * @method CommonDecisionEnveloppeQuery groupByNicAttributaire() Group by the nic_Attributaire column
 * @method CommonDecisionEnveloppeQuery groupByIdentifiantnationalAttributaire() Group by the identifiantNational_Attributaire column
 * @method CommonDecisionEnveloppeQuery groupByRcVilleAttributaire() Group by the rc_ville_attributaire column
 * @method CommonDecisionEnveloppeQuery groupByRcNumAttributaire() Group by the rc_num_attributaire column
 * @method CommonDecisionEnveloppeQuery groupByDateNotificationReelle() Group by the date_notification_reelle column
 * @method CommonDecisionEnveloppeQuery groupByDateFinMarcheReelle() Group by the date_fin_marche_reelle column
 * @method CommonDecisionEnveloppeQuery groupByEnvoiInterface() Group by the envoi_interface column
 * @method CommonDecisionEnveloppeQuery groupByIfuAttributaire() Group by the ifu_attributaire column
 * @method CommonDecisionEnveloppeQuery groupByTypeEntreprise() Group by the type_entreprise column
 *
 * @method CommonDecisionEnveloppeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDecisionEnveloppeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDecisionEnveloppeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDecisionEnveloppe findOne(PropelPDO $con = null) Return the first CommonDecisionEnveloppe matching the query
 * @method CommonDecisionEnveloppe findOneOrCreate(PropelPDO $con = null) Return the first CommonDecisionEnveloppe matching the query, or a new CommonDecisionEnveloppe object populated from the query conditions when no match is found
 *
 * @method CommonDecisionEnveloppe findOneByIdDecisionEnveloppe(int $id_decision_enveloppe) Return the first CommonDecisionEnveloppe filtered by the id_decision_enveloppe column
 * @method CommonDecisionEnveloppe findOneByOrganisme(string $organisme) Return the first CommonDecisionEnveloppe filtered by the organisme column
 * @method CommonDecisionEnveloppe findOneByConsultationRef(int $consultation_ref) Return the first CommonDecisionEnveloppe filtered by the consultation_ref column
 * @method CommonDecisionEnveloppe findOneByIdOffre(int $id_offre) Return the first CommonDecisionEnveloppe filtered by the id_offre column
 * @method CommonDecisionEnveloppe findOneByLot(int $lot) Return the first CommonDecisionEnveloppe filtered by the lot column
 * @method CommonDecisionEnveloppe findOneByDecision(string $decision) Return the first CommonDecisionEnveloppe filtered by the decision column
 * @method CommonDecisionEnveloppe findOneByDateNotification(string $date_notification) Return the first CommonDecisionEnveloppe filtered by the date_notification column
 * @method CommonDecisionEnveloppe findOneByCodePostal(string $code_postal) Return the first CommonDecisionEnveloppe filtered by the code_postal column
 * @method CommonDecisionEnveloppe findOneByPmePmi(int $pme_pmi) Return the first CommonDecisionEnveloppe filtered by the pme_pmi column
 * @method CommonDecisionEnveloppe findOneByTrancheBudgetaire(int $tranche_budgetaire) Return the first CommonDecisionEnveloppe filtered by the tranche_budgetaire column
 * @method CommonDecisionEnveloppe findOneByMontantMarche(string $montant_marche) Return the first CommonDecisionEnveloppe filtered by the montant_marche column
 * @method CommonDecisionEnveloppe findOneByCategorie(int $categorie) Return the first CommonDecisionEnveloppe filtered by the categorie column
 * @method CommonDecisionEnveloppe findOneByObjetMarche(string $objet_marche) Return the first CommonDecisionEnveloppe filtered by the objet_marche column
 * @method CommonDecisionEnveloppe findOneByCommentaire(string $commentaire) Return the first CommonDecisionEnveloppe filtered by the commentaire column
 * @method CommonDecisionEnveloppe findOneByFichierJoint(int $fichier_joint) Return the first CommonDecisionEnveloppe filtered by the fichier_joint column
 * @method CommonDecisionEnveloppe findOneByNomFichierJoint(string $nom_fichier_joint) Return the first CommonDecisionEnveloppe filtered by the nom_fichier_joint column
 * @method CommonDecisionEnveloppe findOneByTypeEnveloppe(string $type_enveloppe) Return the first CommonDecisionEnveloppe filtered by the type_enveloppe column
 * @method CommonDecisionEnveloppe findOneByNumeroMarche(string $numero_marche) Return the first CommonDecisionEnveloppe filtered by the numero_marche column
 * @method CommonDecisionEnveloppe findOneByStatutej(string $statutEJ) Return the first CommonDecisionEnveloppe filtered by the statutEJ column
 * @method CommonDecisionEnveloppe findOneByNote(string $note) Return the first CommonDecisionEnveloppe filtered by the note column
 * @method CommonDecisionEnveloppe findOneByClassement(string $classement) Return the first CommonDecisionEnveloppe filtered by the classement column
 * @method CommonDecisionEnveloppe findOneByIdBlobPiecesNotification(string $id_blob_pieces_notification) Return the first CommonDecisionEnveloppe filtered by the id_blob_pieces_notification column
 * @method CommonDecisionEnveloppe findOneByDateFinMarchePrevisionnel(string $date_fin_marche_previsionnel) Return the first CommonDecisionEnveloppe filtered by the date_fin_marche_previsionnel column
 * @method CommonDecisionEnveloppe findOneByVille(string $ville) Return the first CommonDecisionEnveloppe filtered by the ville column
 * @method CommonDecisionEnveloppe findOneByAcronymepaysAttributaire(string $acronymePays_Attributaire) Return the first CommonDecisionEnveloppe filtered by the acronymePays_Attributaire column
 * @method CommonDecisionEnveloppe findOneByPaysAttributaire(string $pays_Attributaire) Return the first CommonDecisionEnveloppe filtered by the pays_Attributaire column
 * @method CommonDecisionEnveloppe findOneBySirenAttributaire(string $siren_Attributaire) Return the first CommonDecisionEnveloppe filtered by the siren_Attributaire column
 * @method CommonDecisionEnveloppe findOneByNicAttributaire(string $nic_Attributaire) Return the first CommonDecisionEnveloppe filtered by the nic_Attributaire column
 * @method CommonDecisionEnveloppe findOneByIdentifiantnationalAttributaire(string $identifiantNational_Attributaire) Return the first CommonDecisionEnveloppe filtered by the identifiantNational_Attributaire column
 * @method CommonDecisionEnveloppe findOneByRcVilleAttributaire(string $rc_ville_attributaire) Return the first CommonDecisionEnveloppe filtered by the rc_ville_attributaire column
 * @method CommonDecisionEnveloppe findOneByRcNumAttributaire(string $rc_num_attributaire) Return the first CommonDecisionEnveloppe filtered by the rc_num_attributaire column
 * @method CommonDecisionEnveloppe findOneByDateNotificationReelle(string $date_notification_reelle) Return the first CommonDecisionEnveloppe filtered by the date_notification_reelle column
 * @method CommonDecisionEnveloppe findOneByDateFinMarcheReelle(string $date_fin_marche_reelle) Return the first CommonDecisionEnveloppe filtered by the date_fin_marche_reelle column
 * @method CommonDecisionEnveloppe findOneByEnvoiInterface(string $envoi_interface) Return the first CommonDecisionEnveloppe filtered by the envoi_interface column
 * @method CommonDecisionEnveloppe findOneByIfuAttributaire(string $ifu_attributaire) Return the first CommonDecisionEnveloppe filtered by the ifu_attributaire column
 * @method CommonDecisionEnveloppe findOneByTypeEntreprise(string $type_entreprise) Return the first CommonDecisionEnveloppe filtered by the type_entreprise column
 *
 * @method array findByIdDecisionEnveloppe(int $id_decision_enveloppe) Return CommonDecisionEnveloppe objects filtered by the id_decision_enveloppe column
 * @method array findByOrganisme(string $organisme) Return CommonDecisionEnveloppe objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonDecisionEnveloppe objects filtered by the consultation_ref column
 * @method array findByIdOffre(int $id_offre) Return CommonDecisionEnveloppe objects filtered by the id_offre column
 * @method array findByLot(int $lot) Return CommonDecisionEnveloppe objects filtered by the lot column
 * @method array findByDecision(string $decision) Return CommonDecisionEnveloppe objects filtered by the decision column
 * @method array findByDateNotification(string $date_notification) Return CommonDecisionEnveloppe objects filtered by the date_notification column
 * @method array findByCodePostal(string $code_postal) Return CommonDecisionEnveloppe objects filtered by the code_postal column
 * @method array findByPmePmi(int $pme_pmi) Return CommonDecisionEnveloppe objects filtered by the pme_pmi column
 * @method array findByTrancheBudgetaire(int $tranche_budgetaire) Return CommonDecisionEnveloppe objects filtered by the tranche_budgetaire column
 * @method array findByMontantMarche(string $montant_marche) Return CommonDecisionEnveloppe objects filtered by the montant_marche column
 * @method array findByCategorie(int $categorie) Return CommonDecisionEnveloppe objects filtered by the categorie column
 * @method array findByObjetMarche(string $objet_marche) Return CommonDecisionEnveloppe objects filtered by the objet_marche column
 * @method array findByCommentaire(string $commentaire) Return CommonDecisionEnveloppe objects filtered by the commentaire column
 * @method array findByFichierJoint(int $fichier_joint) Return CommonDecisionEnveloppe objects filtered by the fichier_joint column
 * @method array findByNomFichierJoint(string $nom_fichier_joint) Return CommonDecisionEnveloppe objects filtered by the nom_fichier_joint column
 * @method array findByTypeEnveloppe(string $type_enveloppe) Return CommonDecisionEnveloppe objects filtered by the type_enveloppe column
 * @method array findByNumeroMarche(string $numero_marche) Return CommonDecisionEnveloppe objects filtered by the numero_marche column
 * @method array findByStatutej(string $statutEJ) Return CommonDecisionEnveloppe objects filtered by the statutEJ column
 * @method array findByNote(string $note) Return CommonDecisionEnveloppe objects filtered by the note column
 * @method array findByClassement(string $classement) Return CommonDecisionEnveloppe objects filtered by the classement column
 * @method array findByIdBlobPiecesNotification(string $id_blob_pieces_notification) Return CommonDecisionEnveloppe objects filtered by the id_blob_pieces_notification column
 * @method array findByDateFinMarchePrevisionnel(string $date_fin_marche_previsionnel) Return CommonDecisionEnveloppe objects filtered by the date_fin_marche_previsionnel column
 * @method array findByVille(string $ville) Return CommonDecisionEnveloppe objects filtered by the ville column
 * @method array findByAcronymepaysAttributaire(string $acronymePays_Attributaire) Return CommonDecisionEnveloppe objects filtered by the acronymePays_Attributaire column
 * @method array findByPaysAttributaire(string $pays_Attributaire) Return CommonDecisionEnveloppe objects filtered by the pays_Attributaire column
 * @method array findBySirenAttributaire(string $siren_Attributaire) Return CommonDecisionEnveloppe objects filtered by the siren_Attributaire column
 * @method array findByNicAttributaire(string $nic_Attributaire) Return CommonDecisionEnveloppe objects filtered by the nic_Attributaire column
 * @method array findByIdentifiantnationalAttributaire(string $identifiantNational_Attributaire) Return CommonDecisionEnveloppe objects filtered by the identifiantNational_Attributaire column
 * @method array findByRcVilleAttributaire(string $rc_ville_attributaire) Return CommonDecisionEnveloppe objects filtered by the rc_ville_attributaire column
 * @method array findByRcNumAttributaire(string $rc_num_attributaire) Return CommonDecisionEnveloppe objects filtered by the rc_num_attributaire column
 * @method array findByDateNotificationReelle(string $date_notification_reelle) Return CommonDecisionEnveloppe objects filtered by the date_notification_reelle column
 * @method array findByDateFinMarcheReelle(string $date_fin_marche_reelle) Return CommonDecisionEnveloppe objects filtered by the date_fin_marche_reelle column
 * @method array findByEnvoiInterface(string $envoi_interface) Return CommonDecisionEnveloppe objects filtered by the envoi_interface column
 * @method array findByIfuAttributaire(string $ifu_attributaire) Return CommonDecisionEnveloppe objects filtered by the ifu_attributaire column
 * @method array findByTypeEntreprise(string $type_entreprise) Return CommonDecisionEnveloppe objects filtered by the type_entreprise column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDecisionEnveloppeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDecisionEnveloppeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDecisionEnveloppe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDecisionEnveloppeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDecisionEnveloppeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDecisionEnveloppeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDecisionEnveloppeQuery) {
            return $criteria;
        }
        $query = new CommonDecisionEnveloppeQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_decision_enveloppe, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonDecisionEnveloppe|CommonDecisionEnveloppe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDecisionEnveloppePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonDecisionEnveloppe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_decision_enveloppe`, `organisme`, `consultation_ref`, `id_offre`, `lot`, `decision`, `date_notification`, `code_postal`, `pme_pmi`, `tranche_budgetaire`, `montant_marche`, `categorie`, `objet_marche`, `commentaire`, `fichier_joint`, `nom_fichier_joint`, `type_enveloppe`, `numero_marche`, `statutEJ`, `note`, `classement`, `id_blob_pieces_notification`, `date_fin_marche_previsionnel`, `ville`, `acronymePays_Attributaire`, `pays_Attributaire`, `siren_Attributaire`, `nic_Attributaire`, `identifiantNational_Attributaire`, `rc_ville_attributaire`, `rc_num_attributaire`, `date_notification_reelle`, `date_fin_marche_reelle`, `envoi_interface`, `ifu_attributaire`, `type_entreprise` FROM `decisionEnveloppe` WHERE `id_decision_enveloppe` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonDecisionEnveloppe();
            $obj->hydrate($row);
            CommonDecisionEnveloppePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDecisionEnveloppe|CommonDecisionEnveloppe[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonDecisionEnveloppe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDecisionEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDecisionEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_decision_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecisionEnveloppe(1234); // WHERE id_decision_enveloppe = 1234
     * $query->filterByIdDecisionEnveloppe(array(12, 34)); // WHERE id_decision_enveloppe IN (12, 34)
     * $query->filterByIdDecisionEnveloppe(array('min' => 12)); // WHERE id_decision_enveloppe >= 12
     * $query->filterByIdDecisionEnveloppe(array('max' => 12)); // WHERE id_decision_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idDecisionEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdDecisionEnveloppe($idDecisionEnveloppe = null, $comparison = null)
    {
        if (is_array($idDecisionEnveloppe)) {
            $useMinMax = false;
            if (isset($idDecisionEnveloppe['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecisionEnveloppe['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the id_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffre(1234); // WHERE id_offre = 1234
     * $query->filterByIdOffre(array(12, 34)); // WHERE id_offre IN (12, 34)
     * $query->filterByIdOffre(array('min' => 12)); // WHERE id_offre >= 12
     * $query->filterByIdOffre(array('max' => 12)); // WHERE id_offre <= 12
     * </code>
     *
     * @param     mixed $idOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_OFFRE, $idOffre, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDecision('fooValue');   // WHERE decision = 'fooValue'
     * $query->filterByDecision('%fooValue%'); // WHERE decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDecision($decision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decision)) {
                $decision = str_replace('*', '%', $decision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::DECISION, $decision, $comparison);
    }

    /**
     * Filter the query on the date_notification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotification('fooValue');   // WHERE date_notification = 'fooValue'
     * $query->filterByDateNotification('%fooValue%'); // WHERE date_notification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateNotification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateNotification($dateNotification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateNotification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateNotification)) {
                $dateNotification = str_replace('*', '%', $dateNotification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::DATE_NOTIFICATION, $dateNotification, $comparison);
    }

    /**
     * Filter the query on the code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal('fooValue');   // WHERE code_postal = 'fooValue'
     * $query->filterByCodePostal('%fooValue%'); // WHERE code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostal)) {
                $codePostal = str_replace('*', '%', $codePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::CODE_POSTAL, $codePostal, $comparison);
    }

    /**
     * Filter the query on the pme_pmi column
     *
     * Example usage:
     * <code>
     * $query->filterByPmePmi(1234); // WHERE pme_pmi = 1234
     * $query->filterByPmePmi(array(12, 34)); // WHERE pme_pmi IN (12, 34)
     * $query->filterByPmePmi(array('min' => 12)); // WHERE pme_pmi >= 12
     * $query->filterByPmePmi(array('max' => 12)); // WHERE pme_pmi <= 12
     * </code>
     *
     * @param     mixed $pmePmi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPmePmi($pmePmi = null, $comparison = null)
    {
        if (is_array($pmePmi)) {
            $useMinMax = false;
            if (isset($pmePmi['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::PME_PMI, $pmePmi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pmePmi['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::PME_PMI, $pmePmi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::PME_PMI, $pmePmi, $comparison);
    }

    /**
     * Filter the query on the tranche_budgetaire column
     *
     * Example usage:
     * <code>
     * $query->filterByTrancheBudgetaire(1234); // WHERE tranche_budgetaire = 1234
     * $query->filterByTrancheBudgetaire(array(12, 34)); // WHERE tranche_budgetaire IN (12, 34)
     * $query->filterByTrancheBudgetaire(array('min' => 12)); // WHERE tranche_budgetaire >= 12
     * $query->filterByTrancheBudgetaire(array('max' => 12)); // WHERE tranche_budgetaire <= 12
     * </code>
     *
     * @param     mixed $trancheBudgetaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTrancheBudgetaire($trancheBudgetaire = null, $comparison = null)
    {
        if (is_array($trancheBudgetaire)) {
            $useMinMax = false;
            if (isset($trancheBudgetaire['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE, $trancheBudgetaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trancheBudgetaire['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE, $trancheBudgetaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::TRANCHE_BUDGETAIRE, $trancheBudgetaire, $comparison);
    }

    /**
     * Filter the query on the montant_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantMarche('fooValue');   // WHERE montant_marche = 'fooValue'
     * $query->filterByMontantMarche('%fooValue%'); // WHERE montant_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByMontantMarche($montantMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantMarche)) {
                $montantMarche = str_replace('*', '%', $montantMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::MONTANT_MARCHE, $montantMarche, $comparison);
    }

    /**
     * Filter the query on the categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie(1234); // WHERE categorie = 1234
     * $query->filterByCategorie(array(12, 34)); // WHERE categorie IN (12, 34)
     * $query->filterByCategorie(array('min' => 12)); // WHERE categorie >= 12
     * $query->filterByCategorie(array('max' => 12)); // WHERE categorie <= 12
     * </code>
     *
     * @param     mixed $categorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (is_array($categorie)) {
            $useMinMax = false;
            if (isset($categorie['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::CATEGORIE, $categorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categorie['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::CATEGORIE, $categorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the objet_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetMarche('fooValue');   // WHERE objet_marche = 'fooValue'
     * $query->filterByObjetMarche('%fooValue%'); // WHERE objet_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByObjetMarche($objetMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetMarche)) {
                $objetMarche = str_replace('*', '%', $objetMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::OBJET_MARCHE, $objetMarche, $comparison);
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
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the fichier_joint column
     *
     * Example usage:
     * <code>
     * $query->filterByFichierJoint(1234); // WHERE fichier_joint = 1234
     * $query->filterByFichierJoint(array(12, 34)); // WHERE fichier_joint IN (12, 34)
     * $query->filterByFichierJoint(array('min' => 12)); // WHERE fichier_joint >= 12
     * $query->filterByFichierJoint(array('max' => 12)); // WHERE fichier_joint <= 12
     * </code>
     *
     * @param     mixed $fichierJoint The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByFichierJoint($fichierJoint = null, $comparison = null)
    {
        if (is_array($fichierJoint)) {
            $useMinMax = false;
            if (isset($fichierJoint['min'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::FICHIER_JOINT, $fichierJoint['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fichierJoint['max'])) {
                $this->addUsingAlias(CommonDecisionEnveloppePeer::FICHIER_JOINT, $fichierJoint['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::FICHIER_JOINT, $fichierJoint, $comparison);
    }

    /**
     * Filter the query on the nom_fichier_joint column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichierJoint('fooValue');   // WHERE nom_fichier_joint = 'fooValue'
     * $query->filterByNomFichierJoint('%fooValue%'); // WHERE nom_fichier_joint LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichierJoint The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNomFichierJoint($nomFichierJoint = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichierJoint)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichierJoint)) {
                $nomFichierJoint = str_replace('*', '%', $nomFichierJoint);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::NOM_FICHIER_JOINT, $nomFichierJoint, $comparison);
    }

    /**
     * Filter the query on the type_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnveloppe('fooValue');   // WHERE type_enveloppe = 'fooValue'
     * $query->filterByTypeEnveloppe('%fooValue%'); // WHERE type_enveloppe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEnveloppe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEnveloppe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEnveloppe)) {
                $typeEnveloppe = str_replace('*', '%', $typeEnveloppe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
    }

    /**
     * Filter the query on the numero_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroMarche('fooValue');   // WHERE numero_marche = 'fooValue'
     * $query->filterByNumeroMarche('%fooValue%'); // WHERE numero_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNumeroMarche($numeroMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroMarche)) {
                $numeroMarche = str_replace('*', '%', $numeroMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::NUMERO_MARCHE, $numeroMarche, $comparison);
    }

    /**
     * Filter the query on the statutEJ column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutej('fooValue');   // WHERE statutEJ = 'fooValue'
     * $query->filterByStatutej('%fooValue%'); // WHERE statutEJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutej The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByStatutej($statutej = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutej)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutej)) {
                $statutej = str_replace('*', '%', $statutej);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::STATUTEJ, $statutej, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote('fooValue');   // WHERE note = 'fooValue'
     * $query->filterByNote('%fooValue%'); // WHERE note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $note The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($note)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $note)) {
                $note = str_replace('*', '%', $note);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query on the classement column
     *
     * Example usage:
     * <code>
     * $query->filterByClassement('fooValue');   // WHERE classement = 'fooValue'
     * $query->filterByClassement('%fooValue%'); // WHERE classement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $classement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByClassement($classement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($classement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $classement)) {
                $classement = str_replace('*', '%', $classement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::CLASSEMENT, $classement, $comparison);
    }

    /**
     * Filter the query on the id_blob_pieces_notification column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobPiecesNotification('fooValue');   // WHERE id_blob_pieces_notification = 'fooValue'
     * $query->filterByIdBlobPiecesNotification('%fooValue%'); // WHERE id_blob_pieces_notification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idBlobPiecesNotification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdBlobPiecesNotification($idBlobPiecesNotification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idBlobPiecesNotification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idBlobPiecesNotification)) {
                $idBlobPiecesNotification = str_replace('*', '%', $idBlobPiecesNotification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::ID_BLOB_PIECES_NOTIFICATION, $idBlobPiecesNotification, $comparison);
    }

    /**
     * Filter the query on the date_fin_marche_previsionnel column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinMarchePrevisionnel('fooValue');   // WHERE date_fin_marche_previsionnel = 'fooValue'
     * $query->filterByDateFinMarchePrevisionnel('%fooValue%'); // WHERE date_fin_marche_previsionnel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinMarchePrevisionnel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateFinMarchePrevisionnel($dateFinMarchePrevisionnel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinMarchePrevisionnel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinMarchePrevisionnel)) {
                $dateFinMarchePrevisionnel = str_replace('*', '%', $dateFinMarchePrevisionnel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_PREVISIONNEL, $dateFinMarchePrevisionnel, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the acronymePays_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymepaysAttributaire('fooValue');   // WHERE acronymePays_Attributaire = 'fooValue'
     * $query->filterByAcronymepaysAttributaire('%fooValue%'); // WHERE acronymePays_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymepaysAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByAcronymepaysAttributaire($acronymepaysAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymepaysAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymepaysAttributaire)) {
                $acronymepaysAttributaire = str_replace('*', '%', $acronymepaysAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::ACRONYMEPAYS_ATTRIBUTAIRE, $acronymepaysAttributaire, $comparison);
    }

    /**
     * Filter the query on the pays_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysAttributaire('fooValue');   // WHERE pays_Attributaire = 'fooValue'
     * $query->filterByPaysAttributaire('%fooValue%'); // WHERE pays_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPaysAttributaire($paysAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysAttributaire)) {
                $paysAttributaire = str_replace('*', '%', $paysAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::PAYS_ATTRIBUTAIRE, $paysAttributaire, $comparison);
    }

    /**
     * Filter the query on the siren_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterBySirenAttributaire('fooValue');   // WHERE siren_Attributaire = 'fooValue'
     * $query->filterBySirenAttributaire('%fooValue%'); // WHERE siren_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sirenAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterBySirenAttributaire($sirenAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sirenAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sirenAttributaire)) {
                $sirenAttributaire = str_replace('*', '%', $sirenAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::SIREN_ATTRIBUTAIRE, $sirenAttributaire, $comparison);
    }

    /**
     * Filter the query on the nic_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByNicAttributaire('fooValue');   // WHERE nic_Attributaire = 'fooValue'
     * $query->filterByNicAttributaire('%fooValue%'); // WHERE nic_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nicAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNicAttributaire($nicAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nicAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nicAttributaire)) {
                $nicAttributaire = str_replace('*', '%', $nicAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::NIC_ATTRIBUTAIRE, $nicAttributaire, $comparison);
    }

    /**
     * Filter the query on the identifiantNational_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantnationalAttributaire('fooValue');   // WHERE identifiantNational_Attributaire = 'fooValue'
     * $query->filterByIdentifiantnationalAttributaire('%fooValue%'); // WHERE identifiantNational_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantnationalAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdentifiantnationalAttributaire($identifiantnationalAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantnationalAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantnationalAttributaire)) {
                $identifiantnationalAttributaire = str_replace('*', '%', $identifiantnationalAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE, $identifiantnationalAttributaire, $comparison);
    }

    /**
     * Filter the query on the rc_ville_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByRcVilleAttributaire('fooValue');   // WHERE rc_ville_attributaire = 'fooValue'
     * $query->filterByRcVilleAttributaire('%fooValue%'); // WHERE rc_ville_attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcVilleAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByRcVilleAttributaire($rcVilleAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcVilleAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rcVilleAttributaire)) {
                $rcVilleAttributaire = str_replace('*', '%', $rcVilleAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::RC_VILLE_ATTRIBUTAIRE, $rcVilleAttributaire, $comparison);
    }

    /**
     * Filter the query on the rc_num_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByRcNumAttributaire('fooValue');   // WHERE rc_num_attributaire = 'fooValue'
     * $query->filterByRcNumAttributaire('%fooValue%'); // WHERE rc_num_attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcNumAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByRcNumAttributaire($rcNumAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcNumAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rcNumAttributaire)) {
                $rcNumAttributaire = str_replace('*', '%', $rcNumAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::RC_NUM_ATTRIBUTAIRE, $rcNumAttributaire, $comparison);
    }

    /**
     * Filter the query on the date_notification_reelle column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotificationReelle('fooValue');   // WHERE date_notification_reelle = 'fooValue'
     * $query->filterByDateNotificationReelle('%fooValue%'); // WHERE date_notification_reelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateNotificationReelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateNotificationReelle($dateNotificationReelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateNotificationReelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateNotificationReelle)) {
                $dateNotificationReelle = str_replace('*', '%', $dateNotificationReelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::DATE_NOTIFICATION_REELLE, $dateNotificationReelle, $comparison);
    }

    /**
     * Filter the query on the date_fin_marche_reelle column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinMarcheReelle('fooValue');   // WHERE date_fin_marche_reelle = 'fooValue'
     * $query->filterByDateFinMarcheReelle('%fooValue%'); // WHERE date_fin_marche_reelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinMarcheReelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateFinMarcheReelle($dateFinMarcheReelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinMarcheReelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinMarcheReelle)) {
                $dateFinMarcheReelle = str_replace('*', '%', $dateFinMarcheReelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::DATE_FIN_MARCHE_REELLE, $dateFinMarcheReelle, $comparison);
    }

    /**
     * Filter the query on the envoi_interface column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvoiInterface('fooValue');   // WHERE envoi_interface = 'fooValue'
     * $query->filterByEnvoiInterface('%fooValue%'); // WHERE envoi_interface LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envoiInterface The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByEnvoiInterface($envoiInterface = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envoiInterface)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envoiInterface)) {
                $envoiInterface = str_replace('*', '%', $envoiInterface);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::ENVOI_INTERFACE, $envoiInterface, $comparison);
    }

    /**
     * Filter the query on the ifu_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIfuAttributaire('fooValue');   // WHERE ifu_attributaire = 'fooValue'
     * $query->filterByIfuAttributaire('%fooValue%'); // WHERE ifu_attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ifuAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIfuAttributaire($ifuAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ifuAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ifuAttributaire)) {
                $ifuAttributaire = str_replace('*', '%', $ifuAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::IFU_ATTRIBUTAIRE, $ifuAttributaire, $comparison);
    }

    /**
     * Filter the query on the type_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEntreprise('fooValue');   // WHERE type_entreprise = 'fooValue'
     * $query->filterByTypeEntreprise('%fooValue%'); // WHERE type_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTypeEntreprise($typeEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEntreprise)) {
                $typeEntreprise = str_replace('*', '%', $typeEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionEnveloppePeer::TYPE_ENTREPRISE, $typeEntreprise, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDecisionEnveloppe $commonDecisionEnveloppe Object to remove from the list of results
     *
     * @return CommonDecisionEnveloppeQuery The current query, for fluid interface
     */
    public function prune($commonDecisionEnveloppe = null)
    {
        if ($commonDecisionEnveloppe) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDecisionEnveloppePeer::ID_DECISION_ENVELOPPE), $commonDecisionEnveloppe->getIdDecisionEnveloppe(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDecisionEnveloppePeer::ORGANISME), $commonDecisionEnveloppe->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
