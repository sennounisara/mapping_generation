<?php


/**
 * Base class that represents a query for the 'exec_repartition' table.
 *
 * 
 *
 * @method CommonExecRepartitionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecRepartitionQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecRepartitionQuery orderByIdFacture($order = Criteria::ASC) Order by the id_facture column
 * @method CommonExecRepartitionQuery orderByIdPrix($order = Criteria::ASC) Order by the id_prix column
 * @method CommonExecRepartitionQuery orderByIdContractant($order = Criteria::ASC) Order by the id_contractant column
 * @method CommonExecRepartitionQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonExecRepartitionQuery orderByTauxTva($order = Criteria::ASC) Order by the taux_tva column
 * @method CommonExecRepartitionQuery orderByPourcentageRealise($order = Criteria::ASC) Order by the pourcentage_realise column
 * @method CommonExecRepartitionQuery orderByCumulPourcentRealise($order = Criteria::ASC) Order by the cumul_pourcent_realise column
 * @method CommonExecRepartitionQuery orderByMontantFactureHt($order = Criteria::ASC) Order by the montant_facture_ht column
 * @method CommonExecRepartitionQuery orderByMontantFactureTtc($order = Criteria::ASC) Order by the montant_facture_ttc column
 * @method CommonExecRepartitionQuery orderByMontantPayeHt($order = Criteria::ASC) Order by the montant_paye_ht column
 * @method CommonExecRepartitionQuery orderByMontantPayeTtc($order = Criteria::ASC) Order by the montant_paye_ttc column
 * @method CommonExecRepartitionQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecRepartitionQuery orderByIdEntrepriseCrea($order = Criteria::ASC) Order by the id_entreprise_crea column
 * @method CommonExecRepartitionQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecRepartitionQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecRepartitionQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 *
 * @method CommonExecRepartitionQuery groupById() Group by the id column
 * @method CommonExecRepartitionQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecRepartitionQuery groupByIdFacture() Group by the id_facture column
 * @method CommonExecRepartitionQuery groupByIdPrix() Group by the id_prix column
 * @method CommonExecRepartitionQuery groupByIdContractant() Group by the id_contractant column
 * @method CommonExecRepartitionQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonExecRepartitionQuery groupByTauxTva() Group by the taux_tva column
 * @method CommonExecRepartitionQuery groupByPourcentageRealise() Group by the pourcentage_realise column
 * @method CommonExecRepartitionQuery groupByCumulPourcentRealise() Group by the cumul_pourcent_realise column
 * @method CommonExecRepartitionQuery groupByMontantFactureHt() Group by the montant_facture_ht column
 * @method CommonExecRepartitionQuery groupByMontantFactureTtc() Group by the montant_facture_ttc column
 * @method CommonExecRepartitionQuery groupByMontantPayeHt() Group by the montant_paye_ht column
 * @method CommonExecRepartitionQuery groupByMontantPayeTtc() Group by the montant_paye_ttc column
 * @method CommonExecRepartitionQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecRepartitionQuery groupByIdEntrepriseCrea() Group by the id_entreprise_crea column
 * @method CommonExecRepartitionQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecRepartitionQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecRepartitionQuery groupByDateModif() Group by the date_modif column
 *
 * @method CommonExecRepartitionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecRepartitionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecRepartitionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecRepartitionQuery leftJoinCommonExecContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecRepartitionQuery rightJoinCommonExecContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecRepartitionQuery innerJoinCommonExecContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractant relation
 *
 * @method CommonExecRepartitionQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecRepartitionQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecRepartitionQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecRepartitionQuery leftJoinCommonExecFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecRepartitionQuery rightJoinCommonExecFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecRepartitionQuery innerJoinCommonExecFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFacture relation
 *
 * @method CommonExecRepartitionQuery leftJoinCommonExecPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecRepartitionQuery rightJoinCommonExecPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecRepartitionQuery innerJoinCommonExecPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrix relation
 *
 * @method CommonExecRepartition findOne(PropelPDO $con = null) Return the first CommonExecRepartition matching the query
 * @method CommonExecRepartition findOneOrCreate(PropelPDO $con = null) Return the first CommonExecRepartition matching the query, or a new CommonExecRepartition object populated from the query conditions when no match is found
 *
 * @method CommonExecRepartition findOneByIdContrat(int $id_contrat) Return the first CommonExecRepartition filtered by the id_contrat column
 * @method CommonExecRepartition findOneByIdFacture(int $id_facture) Return the first CommonExecRepartition filtered by the id_facture column
 * @method CommonExecRepartition findOneByIdPrix(int $id_prix) Return the first CommonExecRepartition filtered by the id_prix column
 * @method CommonExecRepartition findOneByIdContractant(int $id_contractant) Return the first CommonExecRepartition filtered by the id_contractant column
 * @method CommonExecRepartition findOneByPrixUnitaire(double $prix_unitaire) Return the first CommonExecRepartition filtered by the prix_unitaire column
 * @method CommonExecRepartition findOneByTauxTva(double $taux_tva) Return the first CommonExecRepartition filtered by the taux_tva column
 * @method CommonExecRepartition findOneByPourcentageRealise(double $pourcentage_realise) Return the first CommonExecRepartition filtered by the pourcentage_realise column
 * @method CommonExecRepartition findOneByCumulPourcentRealise(double $cumul_pourcent_realise) Return the first CommonExecRepartition filtered by the cumul_pourcent_realise column
 * @method CommonExecRepartition findOneByMontantFactureHt(double $montant_facture_ht) Return the first CommonExecRepartition filtered by the montant_facture_ht column
 * @method CommonExecRepartition findOneByMontantFactureTtc(double $montant_facture_ttc) Return the first CommonExecRepartition filtered by the montant_facture_ttc column
 * @method CommonExecRepartition findOneByMontantPayeHt(double $montant_paye_ht) Return the first CommonExecRepartition filtered by the montant_paye_ht column
 * @method CommonExecRepartition findOneByMontantPayeTtc(double $montant_paye_ttc) Return the first CommonExecRepartition filtered by the montant_paye_ttc column
 * @method CommonExecRepartition findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecRepartition filtered by the id_agent_crea column
 * @method CommonExecRepartition findOneByIdEntrepriseCrea(int $id_entreprise_crea) Return the first CommonExecRepartition filtered by the id_entreprise_crea column
 * @method CommonExecRepartition findOneByDateCrea(string $date_crea) Return the first CommonExecRepartition filtered by the date_crea column
 * @method CommonExecRepartition findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecRepartition filtered by the id_agent_modif column
 * @method CommonExecRepartition findOneByDateModif(string $date_modif) Return the first CommonExecRepartition filtered by the date_modif column
 *
 * @method array findById(int $id) Return CommonExecRepartition objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecRepartition objects filtered by the id_contrat column
 * @method array findByIdFacture(int $id_facture) Return CommonExecRepartition objects filtered by the id_facture column
 * @method array findByIdPrix(int $id_prix) Return CommonExecRepartition objects filtered by the id_prix column
 * @method array findByIdContractant(int $id_contractant) Return CommonExecRepartition objects filtered by the id_contractant column
 * @method array findByPrixUnitaire(double $prix_unitaire) Return CommonExecRepartition objects filtered by the prix_unitaire column
 * @method array findByTauxTva(double $taux_tva) Return CommonExecRepartition objects filtered by the taux_tva column
 * @method array findByPourcentageRealise(double $pourcentage_realise) Return CommonExecRepartition objects filtered by the pourcentage_realise column
 * @method array findByCumulPourcentRealise(double $cumul_pourcent_realise) Return CommonExecRepartition objects filtered by the cumul_pourcent_realise column
 * @method array findByMontantFactureHt(double $montant_facture_ht) Return CommonExecRepartition objects filtered by the montant_facture_ht column
 * @method array findByMontantFactureTtc(double $montant_facture_ttc) Return CommonExecRepartition objects filtered by the montant_facture_ttc column
 * @method array findByMontantPayeHt(double $montant_paye_ht) Return CommonExecRepartition objects filtered by the montant_paye_ht column
 * @method array findByMontantPayeTtc(double $montant_paye_ttc) Return CommonExecRepartition objects filtered by the montant_paye_ttc column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecRepartition objects filtered by the id_agent_crea column
 * @method array findByIdEntrepriseCrea(int $id_entreprise_crea) Return CommonExecRepartition objects filtered by the id_entreprise_crea column
 * @method array findByDateCrea(string $date_crea) Return CommonExecRepartition objects filtered by the date_crea column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecRepartition objects filtered by the id_agent_modif column
 * @method array findByDateModif(string $date_modif) Return CommonExecRepartition objects filtered by the date_modif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecRepartitionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecRepartitionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecRepartition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecRepartitionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecRepartitionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecRepartitionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecRepartitionQuery) {
            return $criteria;
        }
        $query = new CommonExecRepartitionQuery();
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
     * @return   CommonExecRepartition|CommonExecRepartition[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecRepartitionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecRepartitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecRepartition A model object, or null if the key is not found
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
     * @return                 CommonExecRepartition A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `id_facture`, `id_prix`, `id_contractant`, `prix_unitaire`, `taux_tva`, `pourcentage_realise`, `cumul_pourcent_realise`, `montant_facture_ht`, `montant_facture_ttc`, `montant_paye_ht`, `montant_paye_ttc`, `id_agent_crea`, `id_entreprise_crea`, `date_crea`, `id_agent_modif`, `date_modif` FROM `exec_repartition` WHERE `id` = :p0';
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
            $obj = new CommonExecRepartition();
            $obj->hydrate($row);
            CommonExecRepartitionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecRepartition|CommonExecRepartition[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecRepartition[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID, $id, $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @see       filterByCommonExecFacture()
     *
     * @param     mixed $idFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByIdFacture($idFacture = null, $comparison = null)
    {
        if (is_array($idFacture)) {
            $useMinMax = false;
            if (isset($idFacture['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_FACTURE, $idFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFacture['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_FACTURE, $idFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID_FACTURE, $idFacture, $comparison);
    }

    /**
     * Filter the query on the id_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPrix(1234); // WHERE id_prix = 1234
     * $query->filterByIdPrix(array(12, 34)); // WHERE id_prix IN (12, 34)
     * $query->filterByIdPrix(array('min' => 12)); // WHERE id_prix >= 12
     * $query->filterByIdPrix(array('max' => 12)); // WHERE id_prix <= 12
     * </code>
     *
     * @see       filterByCommonExecPrix()
     *
     * @param     mixed $idPrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByIdPrix($idPrix = null, $comparison = null)
    {
        if (is_array($idPrix)) {
            $useMinMax = false;
            if (isset($idPrix['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_PRIX, $idPrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPrix['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_PRIX, $idPrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID_PRIX, $idPrix, $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByIdContractant($idContractant = null, $comparison = null)
    {
        if (is_array($idContractant)) {
            $useMinMax = false;
            if (isset($idContractant['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRACTANT, $idContractant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContractant['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRACTANT, $idContractant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRACTANT, $idContractant, $comparison);
    }

    /**
     * Filter the query on the prix_unitaire column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixUnitaire(1234); // WHERE prix_unitaire = 1234
     * $query->filterByPrixUnitaire(array(12, 34)); // WHERE prix_unitaire IN (12, 34)
     * $query->filterByPrixUnitaire(array('min' => 12)); // WHERE prix_unitaire >= 12
     * $query->filterByPrixUnitaire(array('max' => 12)); // WHERE prix_unitaire <= 12
     * </code>
     *
     * @param     mixed $prixUnitaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaire($prixUnitaire = null, $comparison = null)
    {
        if (is_array($prixUnitaire)) {
            $useMinMax = false;
            if (isset($prixUnitaire['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::PRIX_UNITAIRE, $prixUnitaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixUnitaire['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::PRIX_UNITAIRE, $prixUnitaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
    }

    /**
     * Filter the query on the taux_tva column
     *
     * Example usage:
     * <code>
     * $query->filterByTauxTva(1234); // WHERE taux_tva = 1234
     * $query->filterByTauxTva(array(12, 34)); // WHERE taux_tva IN (12, 34)
     * $query->filterByTauxTva(array('min' => 12)); // WHERE taux_tva >= 12
     * $query->filterByTauxTva(array('max' => 12)); // WHERE taux_tva <= 12
     * </code>
     *
     * @param     mixed $tauxTva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByTauxTva($tauxTva = null, $comparison = null)
    {
        if (is_array($tauxTva)) {
            $useMinMax = false;
            if (isset($tauxTva['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::TAUX_TVA, $tauxTva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxTva['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::TAUX_TVA, $tauxTva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::TAUX_TVA, $tauxTva, $comparison);
    }

    /**
     * Filter the query on the pourcentage_realise column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentageRealise(1234); // WHERE pourcentage_realise = 1234
     * $query->filterByPourcentageRealise(array(12, 34)); // WHERE pourcentage_realise IN (12, 34)
     * $query->filterByPourcentageRealise(array('min' => 12)); // WHERE pourcentage_realise >= 12
     * $query->filterByPourcentageRealise(array('max' => 12)); // WHERE pourcentage_realise <= 12
     * </code>
     *
     * @param     mixed $pourcentageRealise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByPourcentageRealise($pourcentageRealise = null, $comparison = null)
    {
        if (is_array($pourcentageRealise)) {
            $useMinMax = false;
            if (isset($pourcentageRealise['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::POURCENTAGE_REALISE, $pourcentageRealise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pourcentageRealise['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::POURCENTAGE_REALISE, $pourcentageRealise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::POURCENTAGE_REALISE, $pourcentageRealise, $comparison);
    }

    /**
     * Filter the query on the cumul_pourcent_realise column
     *
     * Example usage:
     * <code>
     * $query->filterByCumulPourcentRealise(1234); // WHERE cumul_pourcent_realise = 1234
     * $query->filterByCumulPourcentRealise(array(12, 34)); // WHERE cumul_pourcent_realise IN (12, 34)
     * $query->filterByCumulPourcentRealise(array('min' => 12)); // WHERE cumul_pourcent_realise >= 12
     * $query->filterByCumulPourcentRealise(array('max' => 12)); // WHERE cumul_pourcent_realise <= 12
     * </code>
     *
     * @param     mixed $cumulPourcentRealise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByCumulPourcentRealise($cumulPourcentRealise = null, $comparison = null)
    {
        if (is_array($cumulPourcentRealise)) {
            $useMinMax = false;
            if (isset($cumulPourcentRealise['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE, $cumulPourcentRealise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cumulPourcentRealise['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE, $cumulPourcentRealise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::CUMUL_POURCENT_REALISE, $cumulPourcentRealise, $comparison);
    }

    /**
     * Filter the query on the montant_facture_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantFactureHt(1234); // WHERE montant_facture_ht = 1234
     * $query->filterByMontantFactureHt(array(12, 34)); // WHERE montant_facture_ht IN (12, 34)
     * $query->filterByMontantFactureHt(array('min' => 12)); // WHERE montant_facture_ht >= 12
     * $query->filterByMontantFactureHt(array('max' => 12)); // WHERE montant_facture_ht <= 12
     * </code>
     *
     * @param     mixed $montantFactureHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByMontantFactureHt($montantFactureHt = null, $comparison = null)
    {
        if (is_array($montantFactureHt)) {
            $useMinMax = false;
            if (isset($montantFactureHt['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_FACTURE_HT, $montantFactureHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureHt['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_FACTURE_HT, $montantFactureHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_FACTURE_HT, $montantFactureHt, $comparison);
    }

    /**
     * Filter the query on the montant_facture_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantFactureTtc(1234); // WHERE montant_facture_ttc = 1234
     * $query->filterByMontantFactureTtc(array(12, 34)); // WHERE montant_facture_ttc IN (12, 34)
     * $query->filterByMontantFactureTtc(array('min' => 12)); // WHERE montant_facture_ttc >= 12
     * $query->filterByMontantFactureTtc(array('max' => 12)); // WHERE montant_facture_ttc <= 12
     * </code>
     *
     * @param     mixed $montantFactureTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByMontantFactureTtc($montantFactureTtc = null, $comparison = null)
    {
        if (is_array($montantFactureTtc)) {
            $useMinMax = false;
            if (isset($montantFactureTtc['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_FACTURE_TTC, $montantFactureTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantFactureTtc['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_FACTURE_TTC, $montantFactureTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_FACTURE_TTC, $montantFactureTtc, $comparison);
    }

    /**
     * Filter the query on the montant_paye_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPayeHt(1234); // WHERE montant_paye_ht = 1234
     * $query->filterByMontantPayeHt(array(12, 34)); // WHERE montant_paye_ht IN (12, 34)
     * $query->filterByMontantPayeHt(array('min' => 12)); // WHERE montant_paye_ht >= 12
     * $query->filterByMontantPayeHt(array('max' => 12)); // WHERE montant_paye_ht <= 12
     * </code>
     *
     * @param     mixed $montantPayeHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByMontantPayeHt($montantPayeHt = null, $comparison = null)
    {
        if (is_array($montantPayeHt)) {
            $useMinMax = false;
            if (isset($montantPayeHt['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_PAYE_HT, $montantPayeHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeHt['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_PAYE_HT, $montantPayeHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_PAYE_HT, $montantPayeHt, $comparison);
    }

    /**
     * Filter the query on the montant_paye_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPayeTtc(1234); // WHERE montant_paye_ttc = 1234
     * $query->filterByMontantPayeTtc(array(12, 34)); // WHERE montant_paye_ttc IN (12, 34)
     * $query->filterByMontantPayeTtc(array('min' => 12)); // WHERE montant_paye_ttc >= 12
     * $query->filterByMontantPayeTtc(array('max' => 12)); // WHERE montant_paye_ttc <= 12
     * </code>
     *
     * @param     mixed $montantPayeTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByMontantPayeTtc($montantPayeTtc = null, $comparison = null)
    {
        if (is_array($montantPayeTtc)) {
            $useMinMax = false;
            if (isset($montantPayeTtc['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_PAYE_TTC, $montantPayeTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPayeTtc['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_PAYE_TTC, $montantPayeTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::MONTANT_PAYE_TTC, $montantPayeTtc, $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the id_entreprise_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntrepriseCrea(1234); // WHERE id_entreprise_crea = 1234
     * $query->filterByIdEntrepriseCrea(array(12, 34)); // WHERE id_entreprise_crea IN (12, 34)
     * $query->filterByIdEntrepriseCrea(array('min' => 12)); // WHERE id_entreprise_crea >= 12
     * $query->filterByIdEntrepriseCrea(array('max' => 12)); // WHERE id_entreprise_crea <= 12
     * </code>
     *
     * @param     mixed $idEntrepriseCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByIdEntrepriseCrea($idEntrepriseCrea = null, $comparison = null)
    {
        if (is_array($idEntrepriseCrea)) {
            $useMinMax = false;
            if (isset($idEntrepriseCrea['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_ENTREPRISE_CREA, $idEntrepriseCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntrepriseCrea['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_ENTREPRISE_CREA, $idEntrepriseCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID_ENTREPRISE_CREA, $idEntrepriseCrea, $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::DATE_CREA, $dateCrea, $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecRepartitionPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecRepartitionPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecRepartitionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractant($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRACTANT, $commonExecContractant->getId(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRACTANT, $commonExecContractant->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
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
     * @return                 CommonExecRepartitionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecRepartitionQuery The current query, for fluid interface
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
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecRepartitionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFacture($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_FACTURE, $commonExecFacture->getId(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_FACTURE, $commonExecFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecFacture() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function joinCommonExecFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFacture');

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
            $this->addJoinObject($join, 'CommonExecFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecFacture relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFacture', 'CommonExecFactureQuery');
    }

    /**
     * Filter the query by a related CommonExecPrix object
     *
     * @param   CommonExecPrix|PropelObjectCollection $commonExecPrix The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecRepartitionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrix($commonExecPrix, $comparison = null)
    {
        if ($commonExecPrix instanceof CommonExecPrix) {
            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_PRIX, $commonExecPrix->getId(), $comparison);
        } elseif ($commonExecPrix instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecRepartitionPeer::ID_PRIX, $commonExecPrix->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecPrix() only accepts arguments of type CommonExecPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function joinCommonExecPrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrix');

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
            $this->addJoinObject($join, 'CommonExecPrix');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrix relation CommonExecPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrix', 'CommonExecPrixQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecRepartition $commonExecRepartition Object to remove from the list of results
     *
     * @return CommonExecRepartitionQuery The current query, for fluid interface
     */
    public function prune($commonExecRepartition = null)
    {
        if ($commonExecRepartition) {
            $this->addUsingAlias(CommonExecRepartitionPeer::ID, $commonExecRepartition->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
