<?php


/**
 * Base class that represents a query for the 'exec_dossier_paiement' table.
 *
 * 
 *
 * @method CommonExecDossierPaiementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecDossierPaiementQuery orderByNumeOrdrePaiement($order = Criteria::ASC) Order by the nume_ordre_paiement column
 * @method CommonExecDossierPaiementQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonExecDossierPaiementQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecDossierPaiementQuery orderByIdAgentCreat($order = Criteria::ASC) Order by the id_agent_creat column
 * @method CommonExecDossierPaiementQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecDossierPaiementQuery orderByDateDepot($order = Criteria::ASC) Order by the date_depot column
 * @method CommonExecDossierPaiementQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonExecDossierPaiementQuery orderByDateRejet($order = Criteria::ASC) Order by the date_rejet column
 * @method CommonExecDossierPaiementQuery orderByMontantAPayeTtc($order = Criteria::ASC) Order by the montant_a_paye_ttc column
 * @method CommonExecDossierPaiementQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecDossierPaiementQuery orderByIdAgentModi($order = Criteria::ASC) Order by the id_agent_modi column
 * @method CommonExecDossierPaiementQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method CommonExecDossierPaiementQuery orderByDateClotureParapheur($order = Criteria::ASC) Order by the date_cloture_parapheur column
 * @method CommonExecDossierPaiementQuery orderByIdAgentValidation($order = Criteria::ASC) Order by the id_agent_validation column
 * @method CommonExecDossierPaiementQuery orderByMontantPenalite($order = Criteria::ASC) Order by the montant_penalite column
 * @method CommonExecDossierPaiementQuery orderByMontantFacture($order = Criteria::ASC) Order by the montant_facture column
 * @method CommonExecDossierPaiementQuery orderByMotifRejet($order = Criteria::ASC) Order by the motif_rejet column
 * @method CommonExecDossierPaiementQuery orderByDateDerniereSynchronisation($order = Criteria::ASC) Order by the date_derniere_synchronisation column
 *
 * @method CommonExecDossierPaiementQuery groupById() Group by the id column
 * @method CommonExecDossierPaiementQuery groupByNumeOrdrePaiement() Group by the nume_ordre_paiement column
 * @method CommonExecDossierPaiementQuery groupByCommentaire() Group by the commentaire column
 * @method CommonExecDossierPaiementQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecDossierPaiementQuery groupByIdAgentCreat() Group by the id_agent_creat column
 * @method CommonExecDossierPaiementQuery groupByStatut() Group by the statut column
 * @method CommonExecDossierPaiementQuery groupByDateDepot() Group by the date_depot column
 * @method CommonExecDossierPaiementQuery groupByDateValidation() Group by the date_validation column
 * @method CommonExecDossierPaiementQuery groupByDateRejet() Group by the date_rejet column
 * @method CommonExecDossierPaiementQuery groupByMontantAPayeTtc() Group by the montant_a_paye_ttc column
 * @method CommonExecDossierPaiementQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecDossierPaiementQuery groupByIdAgentModi() Group by the id_agent_modi column
 * @method CommonExecDossierPaiementQuery groupByIdParapheur() Group by the id_parapheur column
 * @method CommonExecDossierPaiementQuery groupByDateClotureParapheur() Group by the date_cloture_parapheur column
 * @method CommonExecDossierPaiementQuery groupByIdAgentValidation() Group by the id_agent_validation column
 * @method CommonExecDossierPaiementQuery groupByMontantPenalite() Group by the montant_penalite column
 * @method CommonExecDossierPaiementQuery groupByMontantFacture() Group by the montant_facture column
 * @method CommonExecDossierPaiementQuery groupByMotifRejet() Group by the motif_rejet column
 * @method CommonExecDossierPaiementQuery groupByDateDerniereSynchronisation() Group by the date_derniere_synchronisation column
 *
 * @method CommonExecDossierPaiementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecDossierPaiementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecDossierPaiementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecDossierPaiementQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecDossierPaiementQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecDossierPaiementQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecDossierPaiementQuery leftJoinCommonExecDpFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecDpFacture relation
 * @method CommonExecDossierPaiementQuery rightJoinCommonExecDpFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecDpFacture relation
 * @method CommonExecDossierPaiementQuery innerJoinCommonExecDpFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecDpFacture relation
 *
 * @method CommonExecDossierPaiementQuery leftJoinCommonExecPenalite($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPenalite relation
 * @method CommonExecDossierPaiementQuery rightJoinCommonExecPenalite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPenalite relation
 * @method CommonExecDossierPaiementQuery innerJoinCommonExecPenalite($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPenalite relation
 *
 * @method CommonExecDossierPaiementQuery leftJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 * @method CommonExecDossierPaiementQuery rightJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 * @method CommonExecDossierPaiementQuery innerJoinCommonExecPieceDossierpaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceDossierpaiement relation
 *
 * @method CommonExecDossierPaiement findOne(PropelPDO $con = null) Return the first CommonExecDossierPaiement matching the query
 * @method CommonExecDossierPaiement findOneOrCreate(PropelPDO $con = null) Return the first CommonExecDossierPaiement matching the query, or a new CommonExecDossierPaiement object populated from the query conditions when no match is found
 *
 * @method CommonExecDossierPaiement findOneByNumeOrdrePaiement(string $nume_ordre_paiement) Return the first CommonExecDossierPaiement filtered by the nume_ordre_paiement column
 * @method CommonExecDossierPaiement findOneByCommentaire(string $commentaire) Return the first CommonExecDossierPaiement filtered by the commentaire column
 * @method CommonExecDossierPaiement findOneByIdContrat(int $id_contrat) Return the first CommonExecDossierPaiement filtered by the id_contrat column
 * @method CommonExecDossierPaiement findOneByIdAgentCreat(int $id_agent_creat) Return the first CommonExecDossierPaiement filtered by the id_agent_creat column
 * @method CommonExecDossierPaiement findOneByStatut(int $statut) Return the first CommonExecDossierPaiement filtered by the statut column
 * @method CommonExecDossierPaiement findOneByDateDepot(string $date_depot) Return the first CommonExecDossierPaiement filtered by the date_depot column
 * @method CommonExecDossierPaiement findOneByDateValidation(string $date_validation) Return the first CommonExecDossierPaiement filtered by the date_validation column
 * @method CommonExecDossierPaiement findOneByDateRejet(string $date_rejet) Return the first CommonExecDossierPaiement filtered by the date_rejet column
 * @method CommonExecDossierPaiement findOneByMontantAPayeTtc(double $montant_a_paye_ttc) Return the first CommonExecDossierPaiement filtered by the montant_a_paye_ttc column
 * @method CommonExecDossierPaiement findOneByDateCrea(string $date_crea) Return the first CommonExecDossierPaiement filtered by the date_crea column
 * @method CommonExecDossierPaiement findOneByIdAgentModi(int $id_agent_modi) Return the first CommonExecDossierPaiement filtered by the id_agent_modi column
 * @method CommonExecDossierPaiement findOneByIdParapheur(int $id_parapheur) Return the first CommonExecDossierPaiement filtered by the id_parapheur column
 * @method CommonExecDossierPaiement findOneByDateClotureParapheur(string $date_cloture_parapheur) Return the first CommonExecDossierPaiement filtered by the date_cloture_parapheur column
 * @method CommonExecDossierPaiement findOneByIdAgentValidation(int $id_agent_validation) Return the first CommonExecDossierPaiement filtered by the id_agent_validation column
 * @method CommonExecDossierPaiement findOneByMontantPenalite(double $montant_penalite) Return the first CommonExecDossierPaiement filtered by the montant_penalite column
 * @method CommonExecDossierPaiement findOneByMontantFacture(double $montant_facture) Return the first CommonExecDossierPaiement filtered by the montant_facture column
 * @method CommonExecDossierPaiement findOneByMotifRejet(string $motif_rejet) Return the first CommonExecDossierPaiement filtered by the motif_rejet column
 * @method CommonExecDossierPaiement findOneByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return the first CommonExecDossierPaiement filtered by the date_derniere_synchronisation column
 *
 * @method array findById(int $id) Return CommonExecDossierPaiement objects filtered by the id column
 * @method array findByNumeOrdrePaiement(string $nume_ordre_paiement) Return CommonExecDossierPaiement objects filtered by the nume_ordre_paiement column
 * @method array findByCommentaire(string $commentaire) Return CommonExecDossierPaiement objects filtered by the commentaire column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecDossierPaiement objects filtered by the id_contrat column
 * @method array findByIdAgentCreat(int $id_agent_creat) Return CommonExecDossierPaiement objects filtered by the id_agent_creat column
 * @method array findByStatut(int $statut) Return CommonExecDossierPaiement objects filtered by the statut column
 * @method array findByDateDepot(string $date_depot) Return CommonExecDossierPaiement objects filtered by the date_depot column
 * @method array findByDateValidation(string $date_validation) Return CommonExecDossierPaiement objects filtered by the date_validation column
 * @method array findByDateRejet(string $date_rejet) Return CommonExecDossierPaiement objects filtered by the date_rejet column
 * @method array findByMontantAPayeTtc(double $montant_a_paye_ttc) Return CommonExecDossierPaiement objects filtered by the montant_a_paye_ttc column
 * @method array findByDateCrea(string $date_crea) Return CommonExecDossierPaiement objects filtered by the date_crea column
 * @method array findByIdAgentModi(int $id_agent_modi) Return CommonExecDossierPaiement objects filtered by the id_agent_modi column
 * @method array findByIdParapheur(int $id_parapheur) Return CommonExecDossierPaiement objects filtered by the id_parapheur column
 * @method array findByDateClotureParapheur(string $date_cloture_parapheur) Return CommonExecDossierPaiement objects filtered by the date_cloture_parapheur column
 * @method array findByIdAgentValidation(int $id_agent_validation) Return CommonExecDossierPaiement objects filtered by the id_agent_validation column
 * @method array findByMontantPenalite(double $montant_penalite) Return CommonExecDossierPaiement objects filtered by the montant_penalite column
 * @method array findByMontantFacture(double $montant_facture) Return CommonExecDossierPaiement objects filtered by the montant_facture column
 * @method array findByMotifRejet(string $motif_rejet) Return CommonExecDossierPaiement objects filtered by the motif_rejet column
 * @method array findByDateDerniereSynchronisation(string $date_derniere_synchronisation) Return CommonExecDossierPaiement objects filtered by the date_derniere_synchronisation column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecDossierPaiementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecDossierPaiementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecDossierPaiement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecDossierPaiementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecDossierPaiementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecDossierPaiementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecDossierPaiementQuery) {
            return $criteria;
        }
        $query = new CommonExecDossierPaiementQuery();
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
     * @return   CommonExecDossierPaiement|CommonExecDossierPaiement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecDossierPaiementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecDossierPaiementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecDossierPaiement A model object, or null if the key is not found
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
     * @return                 CommonExecDossierPaiement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nume_ordre_paiement`, `commentaire`, `id_contrat`, `id_agent_creat`, `statut`, `date_depot`, `date_validation`, `date_rejet`, `montant_a_paye_ttc`, `date_crea`, `id_agent_modi`, `id_parapheur`, `date_cloture_parapheur`, `id_agent_validation`, `montant_penalite`, `montant_facture`, `motif_rejet`, `date_derniere_synchronisation` FROM `exec_dossier_paiement` WHERE `id` = :p0';
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
            $obj = new CommonExecDossierPaiement();
            $obj->hydrate($row);
            CommonExecDossierPaiementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecDossierPaiement|CommonExecDossierPaiement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecDossierPaiement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nume_ordre_paiement column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeOrdrePaiement('fooValue');   // WHERE nume_ordre_paiement = 'fooValue'
     * $query->filterByNumeOrdrePaiement('%fooValue%'); // WHERE nume_ordre_paiement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeOrdrePaiement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByNumeOrdrePaiement($numeOrdrePaiement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeOrdrePaiement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeOrdrePaiement)) {
                $numeOrdrePaiement = str_replace('*', '%', $numeOrdrePaiement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::NUME_ORDRE_PAIEMENT, $numeOrdrePaiement, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::COMMENTAIRE, $commentaire, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_agent_creat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCreat(1234); // WHERE id_agent_creat = 1234
     * $query->filterByIdAgentCreat(array(12, 34)); // WHERE id_agent_creat IN (12, 34)
     * $query->filterByIdAgentCreat(array('min' => 12)); // WHERE id_agent_creat >= 12
     * $query->filterByIdAgentCreat(array('max' => 12)); // WHERE id_agent_creat <= 12
     * </code>
     *
     * @param     mixed $idAgentCreat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByIdAgentCreat($idAgentCreat = null, $comparison = null)
    {
        if (is_array($idAgentCreat)) {
            $useMinMax = false;
            if (isset($idAgentCreat['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_CREAT, $idAgentCreat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCreat['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_CREAT, $idAgentCreat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_CREAT, $idAgentCreat, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('2011-03-14'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot('now'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot(array('max' => 'yesterday')); // WHERE date_depot > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepot The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (is_array($dateDepot)) {
            $useMinMax = false;
            if (isset($dateDepot['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_DEPOT, $dateDepot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepot['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_DEPOT, $dateDepot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_DEPOT, $dateDepot, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_VALIDATION, $dateValidation, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByDateRejet($dateRejet = null, $comparison = null)
    {
        if (is_array($dateRejet)) {
            $useMinMax = false;
            if (isset($dateRejet['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_REJET, $dateRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejet['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_REJET, $dateRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_REJET, $dateRejet, $comparison);
    }

    /**
     * Filter the query on the montant_a_paye_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAPayeTtc(1234); // WHERE montant_a_paye_ttc = 1234
     * $query->filterByMontantAPayeTtc(array(12, 34)); // WHERE montant_a_paye_ttc IN (12, 34)
     * $query->filterByMontantAPayeTtc(array('min' => 12)); // WHERE montant_a_paye_ttc >= 12
     * $query->filterByMontantAPayeTtc(array('max' => 12)); // WHERE montant_a_paye_ttc <= 12
     * </code>
     *
     * @param     mixed $montantAPayeTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByMontantAPayeTtc($montantAPayeTtc = null, $comparison = null)
    {
        if (is_array($montantAPayeTtc)) {
            $useMinMax = false;
            if (isset($montantAPayeTtc['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC, $montantAPayeTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantAPayeTtc['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC, $montantAPayeTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_A_PAYE_TTC, $montantAPayeTtc, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the id_agent_modi column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentModi(1234); // WHERE id_agent_modi = 1234
     * $query->filterByIdAgentModi(array(12, 34)); // WHERE id_agent_modi IN (12, 34)
     * $query->filterByIdAgentModi(array('min' => 12)); // WHERE id_agent_modi >= 12
     * $query->filterByIdAgentModi(array('max' => 12)); // WHERE id_agent_modi <= 12
     * </code>
     *
     * @param     mixed $idAgentModi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByIdAgentModi($idAgentModi = null, $comparison = null)
    {
        if (is_array($idAgentModi)) {
            $useMinMax = false;
            if (isset($idAgentModi['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_MODI, $idAgentModi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModi['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_MODI, $idAgentModi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_MODI, $idAgentModi, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_PARAPHEUR, $idParapheur, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByDateClotureParapheur($dateClotureParapheur = null, $comparison = null)
    {
        if (is_array($dateClotureParapheur)) {
            $useMinMax = false;
            if (isset($dateClotureParapheur['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateClotureParapheur['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_CLOTURE_PARAPHEUR, $dateClotureParapheur, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidation($idAgentValidation = null, $comparison = null)
    {
        if (is_array($idAgentValidation)) {
            $useMinMax = false;
            if (isset($idAgentValidation['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION, $idAgentValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidation['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION, $idAgentValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::ID_AGENT_VALIDATION, $idAgentValidation, $comparison);
    }

    /**
     * Filter the query on the montant_penalite column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPenalite(1234); // WHERE montant_penalite = 1234
     * $query->filterByMontantPenalite(array(12, 34)); // WHERE montant_penalite IN (12, 34)
     * $query->filterByMontantPenalite(array('min' => 12)); // WHERE montant_penalite >= 12
     * $query->filterByMontantPenalite(array('max' => 12)); // WHERE montant_penalite <= 12
     * </code>
     *
     * @param     mixed $montantPenalite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByMontantPenalite($montantPenalite = null, $comparison = null)
    {
        if (is_array($montantPenalite)) {
            $useMinMax = false;
            if (isset($montantPenalite['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_PENALITE, $montantPenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPenalite['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_PENALITE, $montantPenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_PENALITE, $montantPenalite, $comparison);
    }

    /**
     * Filter the query on the montant_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantFacture(1234); // WHERE montant_facture = 1234
     * $query->filterByMontantFacture(array(12, 34)); // WHERE montant_facture IN (12, 34)
     * $query->filterByMontantFacture(array('min' => 12)); // WHERE montant_facture >= 12
     * $query->filterByMontantFacture(array('max' => 12)); // WHERE montant_facture <= 12
     * </code>
     *
     * @param     mixed $montantFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByMontantFacture($montantFacture = null, $comparison = null)
    {
        if (is_array($montantFacture)) {
            $useMinMax = false;
            if (isset($montantFacture['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_FACTURE, $montantFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFacture['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_FACTURE, $montantFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::MONTANT_FACTURE, $montantFacture, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::MOTIF_REJET, $motifRejet, $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function filterByDateDerniereSynchronisation($dateDerniereSynchronisation = null, $comparison = null)
    {
        if (is_array($dateDerniereSynchronisation)) {
            $useMinMax = false;
            if (isset($dateDerniereSynchronisation['min'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDerniereSynchronisation['max'])) {
                $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDossierPaiementPeer::DATE_DERNIERE_SYNCHRONISATION, $dateDerniereSynchronisation, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecDossierPaiementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecDossierPaiementPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecDossierPaiementPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecDpFacture object
     *
     * @param   CommonExecDpFacture|PropelObjectCollection $commonExecDpFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecDossierPaiementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecDpFacture($commonExecDpFacture, $comparison = null)
    {
        if ($commonExecDpFacture instanceof CommonExecDpFacture) {
            return $this
                ->addUsingAlias(CommonExecDossierPaiementPeer::ID, $commonExecDpFacture->getIdDp(), $comparison);
        } elseif ($commonExecDpFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecDpFactureQuery()
                ->filterByPrimaryKeys($commonExecDpFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecDpFacture() only accepts arguments of type CommonExecDpFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecDpFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function joinCommonExecDpFacture($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecDpFacture');

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
            $this->addJoinObject($join, 'CommonExecDpFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecDpFacture relation CommonExecDpFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecDpFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecDpFactureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecDpFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecDpFacture', 'CommonExecDpFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecPenalite object
     *
     * @param   CommonExecPenalite|PropelObjectCollection $commonExecPenalite  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecDossierPaiementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPenalite($commonExecPenalite, $comparison = null)
    {
        if ($commonExecPenalite instanceof CommonExecPenalite) {
            return $this
                ->addUsingAlias(CommonExecDossierPaiementPeer::ID, $commonExecPenalite->getIdDossierPaiement(), $comparison);
        } elseif ($commonExecPenalite instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPenaliteQuery()
                ->filterByPrimaryKeys($commonExecPenalite->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPenalite() only accepts arguments of type CommonExecPenalite or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPenalite relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function joinCommonExecPenalite($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPenalite');

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
            $this->addJoinObject($join, 'CommonExecPenalite');
        }

        return $this;
    }

    /**
     * Use the CommonExecPenalite relation CommonExecPenalite object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPenaliteQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPenaliteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPenalite($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPenalite', 'CommonExecPenaliteQuery');
    }

    /**
     * Filter the query by a related CommonExecPieceDossierpaiement object
     *
     * @param   CommonExecPieceDossierpaiement|PropelObjectCollection $commonExecPieceDossierpaiement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecDossierPaiementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceDossierpaiement($commonExecPieceDossierpaiement, $comparison = null)
    {
        if ($commonExecPieceDossierpaiement instanceof CommonExecPieceDossierpaiement) {
            return $this
                ->addUsingAlias(CommonExecDossierPaiementPeer::ID, $commonExecPieceDossierpaiement->getIdDossierPaiement(), $comparison);
        } elseif ($commonExecPieceDossierpaiement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceDossierpaiementQuery()
                ->filterByPrimaryKeys($commonExecPieceDossierpaiement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceDossierpaiement() only accepts arguments of type CommonExecPieceDossierpaiement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceDossierpaiement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceDossierpaiement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceDossierpaiement');

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
            $this->addJoinObject($join, 'CommonExecPieceDossierpaiement');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceDossierpaiement relation CommonExecPieceDossierpaiement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceDossierpaiementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceDossierpaiementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPieceDossierpaiement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceDossierpaiement', 'CommonExecPieceDossierpaiementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecDossierPaiement $commonExecDossierPaiement Object to remove from the list of results
     *
     * @return CommonExecDossierPaiementQuery The current query, for fluid interface
     */
    public function prune($commonExecDossierPaiement = null)
    {
        if ($commonExecDossierPaiement) {
            $this->addUsingAlias(CommonExecDossierPaiementPeer::ID, $commonExecDossierPaiement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
