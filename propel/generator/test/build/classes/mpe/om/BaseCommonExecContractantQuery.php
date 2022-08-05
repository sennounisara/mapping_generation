<?php


/**
 * Base class that represents a query for the 'exec_contractant' table.
 *
 * 
 *
 * @method CommonExecContractantQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecContractantQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecContractantQuery orderByIdTypeContractant($order = Criteria::ASC) Order by the id_type_contractant column
 * @method CommonExecContractantQuery orderByIdTypeStructure($order = Criteria::ASC) Order by the id_type_structure column
 * @method CommonExecContractantQuery orderByIdParent($order = Criteria::ASC) Order by the id_parent column
 * @method CommonExecContractantQuery orderByRaisonSociale($order = Criteria::ASC) Order by the raison_sociale column
 * @method CommonExecContractantQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonExecContractantQuery orderByComplementAdresse($order = Criteria::ASC) Order by the complement_adresse column
 * @method CommonExecContractantQuery orderByCodePostal($order = Criteria::ASC) Order by the code_postal column
 * @method CommonExecContractantQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonExecContractantQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonExecContractantQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonExecContractantQuery orderByRcNum($order = Criteria::ASC) Order by the rc_num column
 * @method CommonExecContractantQuery orderByRcVille($order = Criteria::ASC) Order by the rc_ville column
 * @method CommonExecContractantQuery orderByIce($order = Criteria::ASC) Order by the ice column
 * @method CommonExecContractantQuery orderByIfu($order = Criteria::ASC) Order by the ifu column
 * @method CommonExecContractantQuery orderByMontantAttribueHt($order = Criteria::ASC) Order by the montant_attribue_ht column
 * @method CommonExecContractantQuery orderByMontantAttribueTtc($order = Criteria::ASC) Order by the montant_attribue_ttc column
 * @method CommonExecContractantQuery orderByAccessibleFournisseur($order = Criteria::ASC) Order by the accessible_fournisseur column
 * @method CommonExecContractantQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecContractantQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecContractantQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecContractantQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 *
 * @method CommonExecContractantQuery groupById() Group by the id column
 * @method CommonExecContractantQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecContractantQuery groupByIdTypeContractant() Group by the id_type_contractant column
 * @method CommonExecContractantQuery groupByIdTypeStructure() Group by the id_type_structure column
 * @method CommonExecContractantQuery groupByIdParent() Group by the id_parent column
 * @method CommonExecContractantQuery groupByRaisonSociale() Group by the raison_sociale column
 * @method CommonExecContractantQuery groupByAdresse() Group by the adresse column
 * @method CommonExecContractantQuery groupByComplementAdresse() Group by the complement_adresse column
 * @method CommonExecContractantQuery groupByCodePostal() Group by the code_postal column
 * @method CommonExecContractantQuery groupByVille() Group by the ville column
 * @method CommonExecContractantQuery groupByTelephone() Group by the telephone column
 * @method CommonExecContractantQuery groupByFax() Group by the fax column
 * @method CommonExecContractantQuery groupByRcNum() Group by the rc_num column
 * @method CommonExecContractantQuery groupByRcVille() Group by the rc_ville column
 * @method CommonExecContractantQuery groupByIce() Group by the ice column
 * @method CommonExecContractantQuery groupByIfu() Group by the ifu column
 * @method CommonExecContractantQuery groupByMontantAttribueHt() Group by the montant_attribue_ht column
 * @method CommonExecContractantQuery groupByMontantAttribueTtc() Group by the montant_attribue_ttc column
 * @method CommonExecContractantQuery groupByAccessibleFournisseur() Group by the accessible_fournisseur column
 * @method CommonExecContractantQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecContractantQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecContractantQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecContractantQuery groupByIdAgentModif() Group by the id_agent_modif column
 *
 * @method CommonExecContractantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecContractantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecContractantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecContractantQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecContractantQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecContractantQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecContractantRelatedByIdParent($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractantRelatedByIdParent relation
 * @method CommonExecContractantQuery rightJoinCommonExecContractantRelatedByIdParent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractantRelatedByIdParent relation
 * @method CommonExecContractantQuery innerJoinCommonExecContractantRelatedByIdParent($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractantRelatedByIdParent relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecTypeContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeContractant relation
 * @method CommonExecContractantQuery rightJoinCommonExecTypeContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeContractant relation
 * @method CommonExecContractantQuery innerJoinCommonExecTypeContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeContractant relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecTypeStructure($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeStructure relation
 * @method CommonExecContractantQuery rightJoinCommonExecTypeStructure($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeStructure relation
 * @method CommonExecContractantQuery innerJoinCommonExecTypeStructure($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeStructure relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContact relation
 * @method CommonExecContractantQuery rightJoinCommonExecContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContact relation
 * @method CommonExecContractantQuery innerJoinCommonExecContact($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContact relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecContractantRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractantRelatedById relation
 * @method CommonExecContractantQuery rightJoinCommonExecContractantRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractantRelatedById relation
 * @method CommonExecContractantQuery innerJoinCommonExecContractantRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractantRelatedById relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecContractantQuery rightJoinCommonExecEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecContractantQuery innerJoinCommonExecEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenement relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecContractantQuery rightJoinCommonExecFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecContractantQuery innerJoinCommonExecFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFacture relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecInscritContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecInscritContrat relation
 * @method CommonExecContractantQuery rightJoinCommonExecInscritContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecInscritContrat relation
 * @method CommonExecContractantQuery innerJoinCommonExecInscritContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecInscritContrat relation
 *
 * @method CommonExecContractantQuery leftJoinCommonExecRepartition($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonExecContractantQuery rightJoinCommonExecRepartition($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecRepartition relation
 * @method CommonExecContractantQuery innerJoinCommonExecRepartition($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecRepartition relation
 *
 * @method CommonExecContractant findOne(PropelPDO $con = null) Return the first CommonExecContractant matching the query
 * @method CommonExecContractant findOneOrCreate(PropelPDO $con = null) Return the first CommonExecContractant matching the query, or a new CommonExecContractant object populated from the query conditions when no match is found
 *
 * @method CommonExecContractant findOneByIdContrat(int $id_contrat) Return the first CommonExecContractant filtered by the id_contrat column
 * @method CommonExecContractant findOneByIdTypeContractant(int $id_type_contractant) Return the first CommonExecContractant filtered by the id_type_contractant column
 * @method CommonExecContractant findOneByIdTypeStructure(int $id_type_structure) Return the first CommonExecContractant filtered by the id_type_structure column
 * @method CommonExecContractant findOneByIdParent(int $id_parent) Return the first CommonExecContractant filtered by the id_parent column
 * @method CommonExecContractant findOneByRaisonSociale(string $raison_sociale) Return the first CommonExecContractant filtered by the raison_sociale column
 * @method CommonExecContractant findOneByAdresse(string $adresse) Return the first CommonExecContractant filtered by the adresse column
 * @method CommonExecContractant findOneByComplementAdresse(string $complement_adresse) Return the first CommonExecContractant filtered by the complement_adresse column
 * @method CommonExecContractant findOneByCodePostal(int $code_postal) Return the first CommonExecContractant filtered by the code_postal column
 * @method CommonExecContractant findOneByVille(int $ville) Return the first CommonExecContractant filtered by the ville column
 * @method CommonExecContractant findOneByTelephone(string $telephone) Return the first CommonExecContractant filtered by the telephone column
 * @method CommonExecContractant findOneByFax(string $fax) Return the first CommonExecContractant filtered by the fax column
 * @method CommonExecContractant findOneByRcNum(string $rc_num) Return the first CommonExecContractant filtered by the rc_num column
 * @method CommonExecContractant findOneByRcVille(int $rc_ville) Return the first CommonExecContractant filtered by the rc_ville column
 * @method CommonExecContractant findOneByIce(string $ice) Return the first CommonExecContractant filtered by the ice column
 * @method CommonExecContractant findOneByIfu(string $ifu) Return the first CommonExecContractant filtered by the ifu column
 * @method CommonExecContractant findOneByMontantAttribueHt(double $montant_attribue_ht) Return the first CommonExecContractant filtered by the montant_attribue_ht column
 * @method CommonExecContractant findOneByMontantAttribueTtc(double $montant_attribue_ttc) Return the first CommonExecContractant filtered by the montant_attribue_ttc column
 * @method CommonExecContractant findOneByAccessibleFournisseur(int $accessible_fournisseur) Return the first CommonExecContractant filtered by the accessible_fournisseur column
 * @method CommonExecContractant findOneByDateCrea(string $date_crea) Return the first CommonExecContractant filtered by the date_crea column
 * @method CommonExecContractant findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecContractant filtered by the id_agent_crea column
 * @method CommonExecContractant findOneByDateModif(string $date_modif) Return the first CommonExecContractant filtered by the date_modif column
 * @method CommonExecContractant findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecContractant filtered by the id_agent_modif column
 *
 * @method array findById(int $id) Return CommonExecContractant objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecContractant objects filtered by the id_contrat column
 * @method array findByIdTypeContractant(int $id_type_contractant) Return CommonExecContractant objects filtered by the id_type_contractant column
 * @method array findByIdTypeStructure(int $id_type_structure) Return CommonExecContractant objects filtered by the id_type_structure column
 * @method array findByIdParent(int $id_parent) Return CommonExecContractant objects filtered by the id_parent column
 * @method array findByRaisonSociale(string $raison_sociale) Return CommonExecContractant objects filtered by the raison_sociale column
 * @method array findByAdresse(string $adresse) Return CommonExecContractant objects filtered by the adresse column
 * @method array findByComplementAdresse(string $complement_adresse) Return CommonExecContractant objects filtered by the complement_adresse column
 * @method array findByCodePostal(int $code_postal) Return CommonExecContractant objects filtered by the code_postal column
 * @method array findByVille(int $ville) Return CommonExecContractant objects filtered by the ville column
 * @method array findByTelephone(string $telephone) Return CommonExecContractant objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonExecContractant objects filtered by the fax column
 * @method array findByRcNum(string $rc_num) Return CommonExecContractant objects filtered by the rc_num column
 * @method array findByRcVille(int $rc_ville) Return CommonExecContractant objects filtered by the rc_ville column
 * @method array findByIce(string $ice) Return CommonExecContractant objects filtered by the ice column
 * @method array findByIfu(string $ifu) Return CommonExecContractant objects filtered by the ifu column
 * @method array findByMontantAttribueHt(double $montant_attribue_ht) Return CommonExecContractant objects filtered by the montant_attribue_ht column
 * @method array findByMontantAttribueTtc(double $montant_attribue_ttc) Return CommonExecContractant objects filtered by the montant_attribue_ttc column
 * @method array findByAccessibleFournisseur(int $accessible_fournisseur) Return CommonExecContractant objects filtered by the accessible_fournisseur column
 * @method array findByDateCrea(string $date_crea) Return CommonExecContractant objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecContractant objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return CommonExecContractant objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecContractant objects filtered by the id_agent_modif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecContractantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecContractantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecContractant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecContractantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecContractantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecContractantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecContractantQuery) {
            return $criteria;
        }
        $query = new CommonExecContractantQuery();
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
     * @return   CommonExecContractant|CommonExecContractant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecContractantPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContractantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecContractant A model object, or null if the key is not found
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
     * @return                 CommonExecContractant A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `id_type_contractant`, `id_type_structure`, `id_parent`, `raison_sociale`, `adresse`, `complement_adresse`, `code_postal`, `ville`, `telephone`, `fax`, `rc_num`, `rc_ville`, `ice`, `ifu`, `montant_attribue_ht`, `montant_attribue_ttc`, `accessible_fournisseur`, `date_crea`, `id_agent_crea`, `date_modif`, `id_agent_modif` FROM `exec_contractant` WHERE `id` = :p0';
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
            $obj = new CommonExecContractant();
            $obj->hydrate($row);
            CommonExecContractantPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecContractant|CommonExecContractant[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecContractant[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecContractantPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecContractantPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ID, $id, $comparison);
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
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_type_contractant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeContractant(1234); // WHERE id_type_contractant = 1234
     * $query->filterByIdTypeContractant(array(12, 34)); // WHERE id_type_contractant IN (12, 34)
     * $query->filterByIdTypeContractant(array('min' => 12)); // WHERE id_type_contractant >= 12
     * $query->filterByIdTypeContractant(array('max' => 12)); // WHERE id_type_contractant <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeContractant()
     *
     * @param     mixed $idTypeContractant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIdTypeContractant($idTypeContractant = null, $comparison = null)
    {
        if (is_array($idTypeContractant)) {
            $useMinMax = false;
            if (isset($idTypeContractant['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_TYPE_CONTRACTANT, $idTypeContractant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeContractant['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_TYPE_CONTRACTANT, $idTypeContractant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ID_TYPE_CONTRACTANT, $idTypeContractant, $comparison);
    }

    /**
     * Filter the query on the id_type_structure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeStructure(1234); // WHERE id_type_structure = 1234
     * $query->filterByIdTypeStructure(array(12, 34)); // WHERE id_type_structure IN (12, 34)
     * $query->filterByIdTypeStructure(array('min' => 12)); // WHERE id_type_structure >= 12
     * $query->filterByIdTypeStructure(array('max' => 12)); // WHERE id_type_structure <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeStructure()
     *
     * @param     mixed $idTypeStructure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIdTypeStructure($idTypeStructure = null, $comparison = null)
    {
        if (is_array($idTypeStructure)) {
            $useMinMax = false;
            if (isset($idTypeStructure['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_TYPE_STRUCTURE, $idTypeStructure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeStructure['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_TYPE_STRUCTURE, $idTypeStructure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ID_TYPE_STRUCTURE, $idTypeStructure, $comparison);
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
     * @see       filterByCommonExecContractantRelatedByIdParent()
     *
     * @param     mixed $idParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIdParent($idParent = null, $comparison = null)
    {
        if (is_array($idParent)) {
            $useMinMax = false;
            if (isset($idParent['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_PARENT, $idParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParent['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_PARENT, $idParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ID_PARENT, $idParent, $comparison);
    }

    /**
     * Filter the query on the raison_sociale column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSociale('fooValue');   // WHERE raison_sociale = 'fooValue'
     * $query->filterByRaisonSociale('%fooValue%'); // WHERE raison_sociale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByRaisonSociale($raisonSociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSociale)) {
                $raisonSociale = str_replace('*', '%', $raisonSociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::RAISON_SOCIALE, $raisonSociale, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the complement_adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByComplementAdresse('fooValue');   // WHERE complement_adresse = 'fooValue'
     * $query->filterByComplementAdresse('%fooValue%'); // WHERE complement_adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $complementAdresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByComplementAdresse($complementAdresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($complementAdresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $complementAdresse)) {
                $complementAdresse = str_replace('*', '%', $complementAdresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::COMPLEMENT_ADRESSE, $complementAdresse, $comparison);
    }

    /**
     * Filter the query on the code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal(1234); // WHERE code_postal = 1234
     * $query->filterByCodePostal(array(12, 34)); // WHERE code_postal IN (12, 34)
     * $query->filterByCodePostal(array('min' => 12)); // WHERE code_postal >= 12
     * $query->filterByCodePostal(array('max' => 12)); // WHERE code_postal <= 12
     * </code>
     *
     * @param     mixed $codePostal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (is_array($codePostal)) {
            $useMinMax = false;
            if (isset($codePostal['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::CODE_POSTAL, $codePostal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codePostal['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::CODE_POSTAL, $codePostal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::CODE_POSTAL, $codePostal, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille(1234); // WHERE ville = 1234
     * $query->filterByVille(array(12, 34)); // WHERE ville IN (12, 34)
     * $query->filterByVille(array('min' => 12)); // WHERE ville >= 12
     * $query->filterByVille(array('max' => 12)); // WHERE ville <= 12
     * </code>
     *
     * @param     mixed $ville The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (is_array($ville)) {
            $useMinMax = false;
            if (isset($ville['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::VILLE, $ville['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ville['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::VILLE, $ville['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the rc_num column
     *
     * Example usage:
     * <code>
     * $query->filterByRcNum('fooValue');   // WHERE rc_num = 'fooValue'
     * $query->filterByRcNum('%fooValue%'); // WHERE rc_num LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcNum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByRcNum($rcNum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcNum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rcNum)) {
                $rcNum = str_replace('*', '%', $rcNum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::RC_NUM, $rcNum, $comparison);
    }

    /**
     * Filter the query on the rc_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByRcVille(1234); // WHERE rc_ville = 1234
     * $query->filterByRcVille(array(12, 34)); // WHERE rc_ville IN (12, 34)
     * $query->filterByRcVille(array('min' => 12)); // WHERE rc_ville >= 12
     * $query->filterByRcVille(array('max' => 12)); // WHERE rc_ville <= 12
     * </code>
     *
     * @param     mixed $rcVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByRcVille($rcVille = null, $comparison = null)
    {
        if (is_array($rcVille)) {
            $useMinMax = false;
            if (isset($rcVille['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::RC_VILLE, $rcVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rcVille['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::RC_VILLE, $rcVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::RC_VILLE, $rcVille, $comparison);
    }

    /**
     * Filter the query on the ice column
     *
     * Example usage:
     * <code>
     * $query->filterByIce('fooValue');   // WHERE ice = 'fooValue'
     * $query->filterByIce('%fooValue%'); // WHERE ice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIce($ice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ice)) {
                $ice = str_replace('*', '%', $ice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ICE, $ice, $comparison);
    }

    /**
     * Filter the query on the ifu column
     *
     * Example usage:
     * <code>
     * $query->filterByIfu('fooValue');   // WHERE ifu = 'fooValue'
     * $query->filterByIfu('%fooValue%'); // WHERE ifu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ifu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIfu($ifu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ifu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ifu)) {
                $ifu = str_replace('*', '%', $ifu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::IFU, $ifu, $comparison);
    }

    /**
     * Filter the query on the montant_attribue_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAttribueHt(1234); // WHERE montant_attribue_ht = 1234
     * $query->filterByMontantAttribueHt(array(12, 34)); // WHERE montant_attribue_ht IN (12, 34)
     * $query->filterByMontantAttribueHt(array('min' => 12)); // WHERE montant_attribue_ht >= 12
     * $query->filterByMontantAttribueHt(array('max' => 12)); // WHERE montant_attribue_ht <= 12
     * </code>
     *
     * @param     mixed $montantAttribueHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByMontantAttribueHt($montantAttribueHt = null, $comparison = null)
    {
        if (is_array($montantAttribueHt)) {
            $useMinMax = false;
            if (isset($montantAttribueHt['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::MONTANT_ATTRIBUE_HT, $montantAttribueHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantAttribueHt['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::MONTANT_ATTRIBUE_HT, $montantAttribueHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::MONTANT_ATTRIBUE_HT, $montantAttribueHt, $comparison);
    }

    /**
     * Filter the query on the montant_attribue_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAttribueTtc(1234); // WHERE montant_attribue_ttc = 1234
     * $query->filterByMontantAttribueTtc(array(12, 34)); // WHERE montant_attribue_ttc IN (12, 34)
     * $query->filterByMontantAttribueTtc(array('min' => 12)); // WHERE montant_attribue_ttc >= 12
     * $query->filterByMontantAttribueTtc(array('max' => 12)); // WHERE montant_attribue_ttc <= 12
     * </code>
     *
     * @param     mixed $montantAttribueTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByMontantAttribueTtc($montantAttribueTtc = null, $comparison = null)
    {
        if (is_array($montantAttribueTtc)) {
            $useMinMax = false;
            if (isset($montantAttribueTtc['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::MONTANT_ATTRIBUE_TTC, $montantAttribueTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantAttribueTtc['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::MONTANT_ATTRIBUE_TTC, $montantAttribueTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::MONTANT_ATTRIBUE_TTC, $montantAttribueTtc, $comparison);
    }

    /**
     * Filter the query on the accessible_fournisseur column
     *
     * Example usage:
     * <code>
     * $query->filterByAccessibleFournisseur(1234); // WHERE accessible_fournisseur = 1234
     * $query->filterByAccessibleFournisseur(array(12, 34)); // WHERE accessible_fournisseur IN (12, 34)
     * $query->filterByAccessibleFournisseur(array('min' => 12)); // WHERE accessible_fournisseur >= 12
     * $query->filterByAccessibleFournisseur(array('max' => 12)); // WHERE accessible_fournisseur <= 12
     * </code>
     *
     * @param     mixed $accessibleFournisseur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByAccessibleFournisseur($accessibleFournisseur = null, $comparison = null)
    {
        if (is_array($accessibleFournisseur)) {
            $useMinMax = false;
            if (isset($accessibleFournisseur['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ACCESSIBLE_FOURNISSEUR, $accessibleFournisseur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($accessibleFournisseur['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ACCESSIBLE_FOURNISSEUR, $accessibleFournisseur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ACCESSIBLE_FOURNISSEUR, $accessibleFournisseur, $comparison);
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
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::DATE_CREA, $dateCrea, $comparison);
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
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
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
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::DATE_MODIF, $dateModif, $comparison);
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
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecContractantPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecContractantPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecContractantQuery The current query, for fluid interface
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
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractantRelatedByIdParent($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_PARENT, $commonExecContractant->getId(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_PARENT, $commonExecContractant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContractantRelatedByIdParent() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractantRelatedByIdParent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecContractantRelatedByIdParent($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractantRelatedByIdParent');

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
            $this->addJoinObject($join, 'CommonExecContractantRelatedByIdParent');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractantRelatedByIdParent relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantRelatedByIdParentQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContractantRelatedByIdParent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractantRelatedByIdParent', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeContractant object
     *
     * @param   CommonExecTypeContractant|PropelObjectCollection $commonExecTypeContractant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeContractant($commonExecTypeContractant, $comparison = null)
    {
        if ($commonExecTypeContractant instanceof CommonExecTypeContractant) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_TYPE_CONTRACTANT, $commonExecTypeContractant->getId(), $comparison);
        } elseif ($commonExecTypeContractant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_TYPE_CONTRACTANT, $commonExecTypeContractant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeContractant() only accepts arguments of type CommonExecTypeContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeContractant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeContractant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeContractant');

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
            $this->addJoinObject($join, 'CommonExecTypeContractant');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeContractant relation CommonExecTypeContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeContractantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeContractant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeContractant', 'CommonExecTypeContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeStructure object
     *
     * @param   CommonExecTypeStructure|PropelObjectCollection $commonExecTypeStructure The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeStructure($commonExecTypeStructure, $comparison = null)
    {
        if ($commonExecTypeStructure instanceof CommonExecTypeStructure) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_TYPE_STRUCTURE, $commonExecTypeStructure->getId(), $comparison);
        } elseif ($commonExecTypeStructure instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID_TYPE_STRUCTURE, $commonExecTypeStructure->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeStructure() only accepts arguments of type CommonExecTypeStructure or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeStructure relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeStructure($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeStructure');

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
            $this->addJoinObject($join, 'CommonExecTypeStructure');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeStructure relation CommonExecTypeStructure object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeStructureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeStructureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeStructure($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeStructure', 'CommonExecTypeStructureQuery');
    }

    /**
     * Filter the query by a related CommonExecContact object
     *
     * @param   CommonExecContact|PropelObjectCollection $commonExecContact  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContact($commonExecContact, $comparison = null)
    {
        if ($commonExecContact instanceof CommonExecContact) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID, $commonExecContact->getIdContractant(), $comparison);
        } elseif ($commonExecContact instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContactQuery()
                ->filterByPrimaryKeys($commonExecContact->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContact() only accepts arguments of type CommonExecContact or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContact relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContact');

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
            $this->addJoinObject($join, 'CommonExecContact');
        }

        return $this;
    }

    /**
     * Use the CommonExecContact relation CommonExecContact object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContactQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContact($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContact', 'CommonExecContactQuery');
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractantRelatedById($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID, $commonExecContractant->getIdParent(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContractantRelatedByIdQuery()
                ->filterByPrimaryKeys($commonExecContractant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContractantRelatedById() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractantRelatedById relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecContractantRelatedById($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractantRelatedById');

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
            $this->addJoinObject($join, 'CommonExecContractantRelatedById');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractantRelatedById relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantRelatedByIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContractantRelatedById($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractantRelatedById', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecEvenement object
     *
     * @param   CommonExecEvenement|PropelObjectCollection $commonExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenement($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID, $commonExecEvenement->getIdContractant(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenement() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenement');

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
            $this->addJoinObject($join, 'CommonExecEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenement relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenement', 'CommonExecEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFacture($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID, $commonExecFacture->getIdContractant(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecFactureQuery()
                ->filterByPrimaryKeys($commonExecFacture->getPrimaryKeys())
                ->endUse();
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
     * @return CommonExecContractantQuery The current query, for fluid interface
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
     * Filter the query by a related CommonExecInscritContrat object
     *
     * @param   CommonExecInscritContrat|PropelObjectCollection $commonExecInscritContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecInscritContrat($commonExecInscritContrat, $comparison = null)
    {
        if ($commonExecInscritContrat instanceof CommonExecInscritContrat) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID, $commonExecInscritContrat->getIdContractant(), $comparison);
        } elseif ($commonExecInscritContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecInscritContratQuery()
                ->filterByPrimaryKeys($commonExecInscritContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecInscritContrat() only accepts arguments of type CommonExecInscritContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecInscritContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecInscritContrat($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecInscritContrat');

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
            $this->addJoinObject($join, 'CommonExecInscritContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecInscritContrat relation CommonExecInscritContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecInscritContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecInscritContratQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecInscritContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecInscritContrat', 'CommonExecInscritContratQuery');
    }

    /**
     * Filter the query by a related CommonExecRepartition object
     *
     * @param   CommonExecRepartition|PropelObjectCollection $commonExecRepartition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecRepartition($commonExecRepartition, $comparison = null)
    {
        if ($commonExecRepartition instanceof CommonExecRepartition) {
            return $this
                ->addUsingAlias(CommonExecContractantPeer::ID, $commonExecRepartition->getIdContractant(), $comparison);
        } elseif ($commonExecRepartition instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecRepartitionQuery()
                ->filterByPrimaryKeys($commonExecRepartition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecRepartition() only accepts arguments of type CommonExecRepartition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecRepartition relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecRepartition($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecRepartition');

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
            $this->addJoinObject($join, 'CommonExecRepartition');
        }

        return $this;
    }

    /**
     * Use the CommonExecRepartition relation CommonExecRepartition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecRepartitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecRepartitionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecRepartition($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecRepartition', 'CommonExecRepartitionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecContractant $commonExecContractant Object to remove from the list of results
     *
     * @return CommonExecContractantQuery The current query, for fluid interface
     */
    public function prune($commonExecContractant = null)
    {
        if ($commonExecContractant) {
            $this->addUsingAlias(CommonExecContractantPeer::ID, $commonExecContractant->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
