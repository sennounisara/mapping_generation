<?php


/**
 * Base class that represents a query for the 'RPA' table.
 *
 * 
 *
 * @method CommonRPAQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonRPAQuery orderByAcronymeorg($order = Criteria::ASC) Order by the acronymeOrg column
 * @method CommonRPAQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonRPAQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonRPAQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonRPAQuery orderByAdresse1($order = Criteria::ASC) Order by the adresse1 column
 * @method CommonRPAQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonRPAQuery orderByCodepostal($order = Criteria::ASC) Order by the codepostal column
 * @method CommonRPAQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonRPAQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonRPAQuery orderByFonction($order = Criteria::ASC) Order by the Fonction column
 * @method CommonRPAQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonRPAQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonRPAQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonRPAQuery orderByResponsableArchive($order = Criteria::ASC) Order by the responsable_archive column
 * @method CommonRPAQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonRPAQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonRPAQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonRPAQuery orderByOrganismerpa($order = Criteria::ASC) Order by the OrganismeRpa column
 *
 * @method CommonRPAQuery groupById() Group by the id column
 * @method CommonRPAQuery groupByAcronymeorg() Group by the acronymeOrg column
 * @method CommonRPAQuery groupByOrganisme() Group by the organisme column
 * @method CommonRPAQuery groupByNom() Group by the nom column
 * @method CommonRPAQuery groupByPrenom() Group by the prenom column
 * @method CommonRPAQuery groupByAdresse1() Group by the adresse1 column
 * @method CommonRPAQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonRPAQuery groupByCodepostal() Group by the codepostal column
 * @method CommonRPAQuery groupByVille() Group by the ville column
 * @method CommonRPAQuery groupByIdService() Group by the id_service column
 * @method CommonRPAQuery groupByFonction() Group by the Fonction column
 * @method CommonRPAQuery groupByPays() Group by the pays column
 * @method CommonRPAQuery groupByDateCreation() Group by the date_creation column
 * @method CommonRPAQuery groupByDateModification() Group by the date_modification column
 * @method CommonRPAQuery groupByResponsableArchive() Group by the responsable_archive column
 * @method CommonRPAQuery groupByEmail() Group by the email column
 * @method CommonRPAQuery groupByTelephone() Group by the telephone column
 * @method CommonRPAQuery groupByFax() Group by the fax column
 * @method CommonRPAQuery groupByOrganismerpa() Group by the OrganismeRpa column
 *
 * @method CommonRPAQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonRPAQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonRPAQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonRPA findOne(PropelPDO $con = null) Return the first CommonRPA matching the query
 * @method CommonRPA findOneOrCreate(PropelPDO $con = null) Return the first CommonRPA matching the query, or a new CommonRPA object populated from the query conditions when no match is found
 *
 * @method CommonRPA findOneById(int $id) Return the first CommonRPA filtered by the id column
 * @method CommonRPA findOneByAcronymeorg(string $acronymeOrg) Return the first CommonRPA filtered by the acronymeOrg column
 * @method CommonRPA findOneByOrganisme(string $organisme) Return the first CommonRPA filtered by the organisme column
 * @method CommonRPA findOneByNom(string $nom) Return the first CommonRPA filtered by the nom column
 * @method CommonRPA findOneByPrenom(string $prenom) Return the first CommonRPA filtered by the prenom column
 * @method CommonRPA findOneByAdresse1(string $adresse1) Return the first CommonRPA filtered by the adresse1 column
 * @method CommonRPA findOneByAdresse2(string $adresse2) Return the first CommonRPA filtered by the adresse2 column
 * @method CommonRPA findOneByCodepostal(string $codepostal) Return the first CommonRPA filtered by the codepostal column
 * @method CommonRPA findOneByVille(string $ville) Return the first CommonRPA filtered by the ville column
 * @method CommonRPA findOneByIdService(int $id_service) Return the first CommonRPA filtered by the id_service column
 * @method CommonRPA findOneByFonction(string $Fonction) Return the first CommonRPA filtered by the Fonction column
 * @method CommonRPA findOneByPays(string $pays) Return the first CommonRPA filtered by the pays column
 * @method CommonRPA findOneByDateCreation(string $date_creation) Return the first CommonRPA filtered by the date_creation column
 * @method CommonRPA findOneByDateModification(string $date_modification) Return the first CommonRPA filtered by the date_modification column
 * @method CommonRPA findOneByResponsableArchive(string $responsable_archive) Return the first CommonRPA filtered by the responsable_archive column
 * @method CommonRPA findOneByEmail(string $email) Return the first CommonRPA filtered by the email column
 * @method CommonRPA findOneByTelephone(string $telephone) Return the first CommonRPA filtered by the telephone column
 * @method CommonRPA findOneByFax(string $fax) Return the first CommonRPA filtered by the fax column
 * @method CommonRPA findOneByOrganismerpa(string $OrganismeRpa) Return the first CommonRPA filtered by the OrganismeRpa column
 *
 * @method array findById(int $id) Return CommonRPA objects filtered by the id column
 * @method array findByAcronymeorg(string $acronymeOrg) Return CommonRPA objects filtered by the acronymeOrg column
 * @method array findByOrganisme(string $organisme) Return CommonRPA objects filtered by the organisme column
 * @method array findByNom(string $nom) Return CommonRPA objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonRPA objects filtered by the prenom column
 * @method array findByAdresse1(string $adresse1) Return CommonRPA objects filtered by the adresse1 column
 * @method array findByAdresse2(string $adresse2) Return CommonRPA objects filtered by the adresse2 column
 * @method array findByCodepostal(string $codepostal) Return CommonRPA objects filtered by the codepostal column
 * @method array findByVille(string $ville) Return CommonRPA objects filtered by the ville column
 * @method array findByIdService(int $id_service) Return CommonRPA objects filtered by the id_service column
 * @method array findByFonction(string $Fonction) Return CommonRPA objects filtered by the Fonction column
 * @method array findByPays(string $pays) Return CommonRPA objects filtered by the pays column
 * @method array findByDateCreation(string $date_creation) Return CommonRPA objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonRPA objects filtered by the date_modification column
 * @method array findByResponsableArchive(string $responsable_archive) Return CommonRPA objects filtered by the responsable_archive column
 * @method array findByEmail(string $email) Return CommonRPA objects filtered by the email column
 * @method array findByTelephone(string $telephone) Return CommonRPA objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonRPA objects filtered by the fax column
 * @method array findByOrganismerpa(string $OrganismeRpa) Return CommonRPA objects filtered by the OrganismeRpa column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonRPAQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonRPAQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonRPA', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonRPAQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonRPAQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonRPAQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonRPAQuery) {
            return $criteria;
        }
        $query = new CommonRPAQuery();
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
                         A Primary key composition: [$id, $acronymeOrg]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonRPA|CommonRPA[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonRPAPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonRPAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRPA A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `acronymeOrg`, `organisme`, `nom`, `prenom`, `adresse1`, `adresse2`, `codepostal`, `ville`, `id_service`, `Fonction`, `pays`, `date_creation`, `date_modification`, `responsable_archive`, `email`, `telephone`, `fax`, `OrganismeRpa` FROM `RPA` WHERE `id` = :p0 AND `acronymeOrg` = :p1';
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
            $obj = new CommonRPA();
            $obj->hydrate($row);
            CommonRPAPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonRPA|CommonRPA[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonRPA[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonRPAPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonRPAPeer::ACRONYMEORG, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonRPAPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonRPAPeer::ACRONYMEORG, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonRPAPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonRPAPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the acronymeOrg column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymeorg('fooValue');   // WHERE acronymeOrg = 'fooValue'
     * $query->filterByAcronymeorg('%fooValue%'); // WHERE acronymeOrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymeorg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByAcronymeorg($acronymeorg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymeorg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymeorg)) {
                $acronymeorg = str_replace('*', '%', $acronymeorg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::ACRONYMEORG, $acronymeorg, $comparison);
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
     * @return CommonRPAQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRPAPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the adresse1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse1('fooValue');   // WHERE adresse1 = 'fooValue'
     * $query->filterByAdresse1('%fooValue%'); // WHERE adresse1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByAdresse1($adresse1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse1)) {
                $adresse1 = str_replace('*', '%', $adresse1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::ADRESSE1, $adresse1, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the codepostal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodepostal('fooValue');   // WHERE codepostal = 'fooValue'
     * $query->filterByCodepostal('%fooValue%'); // WHERE codepostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codepostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByCodepostal($codepostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codepostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codepostal)) {
                $codepostal = str_replace('*', '%', $codepostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::CODEPOSTAL, $codepostal, $comparison);
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
     * @return CommonRPAQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRPAPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonRPAPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonRPAPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the Fonction column
     *
     * Example usage:
     * <code>
     * $query->filterByFonction('fooValue');   // WHERE Fonction = 'fooValue'
     * $query->filterByFonction('%fooValue%'); // WHERE Fonction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fonction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByFonction($fonction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fonction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fonction)) {
                $fonction = str_replace('*', '%', $fonction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::FONCTION, $fonction, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the responsable_archive column
     *
     * Example usage:
     * <code>
     * $query->filterByResponsableArchive('fooValue');   // WHERE responsable_archive = 'fooValue'
     * $query->filterByResponsableArchive('%fooValue%'); // WHERE responsable_archive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $responsableArchive The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByResponsableArchive($responsableArchive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($responsableArchive)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $responsableArchive)) {
                $responsableArchive = str_replace('*', '%', $responsableArchive);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::RESPONSABLE_ARCHIVE, $responsableArchive, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::EMAIL, $email, $comparison);
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
     * @return CommonRPAQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRPAPeer::TELEPHONE, $telephone, $comparison);
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
     * @return CommonRPAQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRPAPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the OrganismeRpa column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismerpa('fooValue');   // WHERE OrganismeRpa = 'fooValue'
     * $query->filterByOrganismerpa('%fooValue%'); // WHERE OrganismeRpa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismerpa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function filterByOrganismerpa($organismerpa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismerpa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismerpa)) {
                $organismerpa = str_replace('*', '%', $organismerpa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRPAPeer::ORGANISMERPA, $organismerpa, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonRPA $commonRPA Object to remove from the list of results
     *
     * @return CommonRPAQuery The current query, for fluid interface
     */
    public function prune($commonRPA = null)
    {
        if ($commonRPA) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonRPAPeer::ID), $commonRPA->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonRPAPeer::ACRONYMEORG), $commonRPA->getAcronymeorg(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
